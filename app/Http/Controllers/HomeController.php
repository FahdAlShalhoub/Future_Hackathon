<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Single;
use App\GroupsOfSingles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $groups=Group::all();
        return view('admin.home',['groups'=>$groups]);
    }

    public function pullSingles()
    {
        $singles=Single::all();
        return view('admin.singlesAdminstration',['singles'=>$singles]);
    }

    public function pullGroupsOfSingles()
    {
        $members=Single::whereNotNull('groupID')->get()->groupBy('groupID');
        return view('admin.groupsOfSinglesAdministration',['members'=>$members]);
    }

    public function showSinglesGroupMaker()
    {
        $singles=Single::where('status','new')->orWhere('status','rejected')->get(); 
        
        return view('admin.singlesGroupMaker',['singles'=>$singles]);
    }

    public function makeRandomGroupsOfSingles()
    {
        $singles=Single::whereNull('groupID')->where(['gender' => 'female'])->get()->shuffle()->all();
        $groupOfSingles=[];
        foreach($singles as $single){
           if(sizeOf($groupOfSingles)==4){
               $memberIDs=Json_encode($groupOfSingles);
               $this->makeGroup($memberIDs);
               $groupOfSingles=[];
               array_push($groupOfSingles,$single->id);
           } else
            array_push($groupOfSingles,$single->id);
        }
        if(sizeOf($groupOfSingles)>1 && sizeOf($groupOfSingles)<5){
            $memberIDs=Json_encode($groupOfSingles);
            $this->makeGroup($memberIDs);
            $groupOfSingles=[];
        }

        $singles=Single::whereNull('groupID')->where(['gender' => 'male'])->get()->shuffle()->all();
        $groupOfSingles=[];
        foreach($singles as $single){
           if(sizeOf($groupOfSingles)==4){
               $memberIDs=Json_encode($groupOfSingles);
               $this->makeGroup($memberIDs);
               $groupOfSingles=[];
               array_push($groupOfSingles,$single->id);
           } else
            array_push($groupOfSingles,$single->id);
        }
        if(sizeOf($groupOfSingles)>1 && sizeOf($groupOfSingles)<5){
            $memberIDs=Json_encode($groupOfSingles);
            $this->makeGroup($memberIDs);
            $groupOfSingles=[];
        }
        $members=Single::whereNotNull('groupID')->get()->groupBy('groupID');
        return redirect(route('pullGroupsOfSingles'));
    }

    public function makeGroup($memberIDs)
    {
        $memberIDs=Json_decode($memberIDs);
        if(count($memberIDs)<2 || count($memberIDs)>4 )
        {
            return "Invalid amount of members";
        }
        else
        {
           $group=GroupsOfSingles::create();
           foreach($memberIDs as $member){
               $single=Single::find($member);
               $single->status='accepted';
               $single->save();
               $group->singles()->save($single);
               $group->save();
           }
        }
    }

    public function fetch($status)
    {
        $groups=Group::where('status',$status)->get();
        return view('admin.home',['groups'=>$groups]);
    }

    public function show($id)
    {
        $group=Group::find($id);
        return view('admin.groupAdminstration',['group'=>$group]);
    }

    public function accept($id)
    { 
        $acceptedGroup=Group::find($id);
        $previousStatus=$acceptedGroup->status;
        $acceptedGroup->status='accepted';
        $acceptedGroup->save();
        return redirect('pullgroups/'.$previousStatus);
    }

    public function reject($id)
    {
        $rejectedGroup=Group::find($id);
        $previousStatus=$rejectedGroup->status;
        $rejectedGroup->status='rejected';
        $rejectedGroup->save();
        return redirect('pullgroups/'.$previousStatus);
    }

    public function rejectSingle(Single $single)
    {
        $single->update(['groupID' => null, 'status' => 'rejected']);
        return redirect(route('pullGroupsOfSingles'));
    }

    public function attendedGroup(Group $group){
        $group->attended='yes';
        $group->save();
        return redirect(route('home'));
    }

    
    public function absentGroup(Group $group){
        $group->attended='no';
        $group->save();
        return redirect(route('home'));
    }

    public function attendedSingle(Single $single){
        $single->attended='yes';
        $single->save();
        return redirect(route('pullSingles'));
    }

    public function absentSingle(Single $single){
        $single->attended='no';
        $single->save();
        return redirect(route('pullSingles'));
    }
}
