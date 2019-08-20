<?php

namespace App\Http\Controllers;

use App\Single;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        $attributes = request()->validate([
            'name' => 'required|min:1',
            'email' => 'required|email|max:255|unique:singles,email',
            'major' => 'required|min:1',
            'gender' => 'required|min:1',
        ]);

        Single::create($attributes + ['status' => 'new']);
        \Session::flash('message', 'تم الإرسال بنجاح!');
        return redirect('/done');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Single  $single
     * @return \Illuminate\Http\Response
     */
    public function show(Single $single)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Single  $single
     * @return \Illuminate\Http\Response
     */
    public function edit(Single $single)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Single  $single
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Single $single)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Single  $single
     * @return \Illuminate\Http\Response
     */
    public function destroy(Single $single)
    {
        //
    }
}