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
        $messsages=[
            'leadEmail.unique' => 'البريد الإلكتروني مسجل مسبقا',
            'leadEmail.email' => 'الرجاء ادخال بريد الكتروني صحيح',
            'leadName' => 'الرجاء ادخال اسم القائد',
            'groupName' => 'الرجاء ادخال اسم المجموعة'
        ];

        $attributes = request()->validate([
            'leadName' => 'required|min:1',
            'leadEmail' => 'required|email|max:255|unique:groups,leadEmail|unique:singles,email',
            'groupName' => 'required|min:1',
        ],$messsages);

        $memberNames = $request->input('memberName');

        $membersCount = count($memberNames);

        if ($membersCount < 1 || $membersCount > 3) {
            return redirect()->back()->withInput();
        };

        $members=[];
        $memberNum=2;
        foreach($memberNames as $name){
            $members+=[$memberNum++ => $name];
        }

        Group::create($attributes + ['status' => 'new', 'groupMembersJson' => json_encode($members)]);
        \Session::flash('message', 'تم الإرسال بنجاح!');
        return view('done');

    }

}
