<?php

namespace App\Http\Controllers;

use App\Single;
use Illuminate\Http\Request;

class SingleController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('singularForm');
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
            'email.unique' => 'البريد الإلكتروني مسجل مسبقا',
            'email.email' => 'الرجاء ادخال بريد الكتروني صحيح',
            'name' => 'الرجاء ادخال الأسم',
            'major' => 'الرجاء ادخال التخصص',
            'gender' => 'الرجاء تحديد الجنس'
        ];
        
        $attributes = request()->validate([
            'name' => 'required|min:1',
            'email' => 'required|email|max:255|unique:singles,email|unique:groups,leadEmail',
            'major' => 'required|min:1',
            'gender' => 'required|min:1',
        ],$messsages);

        Single::create($attributes + ['status' => 'new']);
        \Session::flash('message', 'تم الإرسال بنجاح!');
        return view('done');

    }

    public function confirm(Single $Single, Request $request)
    {
        if(! $request->hasValidSignature()){
            abort(401);
        }

        $Single->confirmed='yes';
        $Single->save();
        return redirect('confirmed');
    } 

}
