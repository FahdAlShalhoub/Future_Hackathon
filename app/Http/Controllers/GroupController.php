<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'leadName' => 'required|min:1',
            'leadEmail' => 'required|email|max:255|unique:groups,leadEmail',
            'groupName' => 'required|min:1',
        ]);

        $memberNames = $request->input('memberName');

        $membersCount = count($memberNames);

        if ($membersCount < 1 || $membersCount > 3) {
            return redirect()->back()->withInput();
        };

        $members=[];
        $memberNum=2;
        foreach($memberNames as $name){
            $members+=["Member ".$memberNum++ => $name];
        }

        Group::create($attributes + ['status' => 'new', 'groupMembersJson' => json_encode($members)]);
        \Session::flash('message', 'تم الإرسال بنجاح!');
        return view('done');

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Group  $group
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Group $group)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Group  $group
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Group $group)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Group  $group
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Group $group)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Group  $group
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Group $group)
    // {
    //     //
    // }
}
