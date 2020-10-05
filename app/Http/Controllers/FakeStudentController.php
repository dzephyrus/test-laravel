<?php

namespace App\Http\Controllers;

use App\Models\fakestudent;
use Illuminate\Http\Request;


class FakeStudentController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('FakeStudentController index');
        // $fakeStudent = fakestudent::all();
        // return view('student.list');
        $fakestudent = fakestudent::get();
        return view('student.list', ['fakestudent' => $fakestudent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fakestudent  $fakestudent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $detail = fakestudent::find($id);
        return view('student.show', ['student' => $detail]);
        // //show su dung phuong thuc get, route name = student.show
        // // dd('FakeStudentController show');
        // $fakestudentObjEloquentModel = fakestudent::find($fakestudent);
        // $fakestudentObjQueryBuilder = DB::table('fakeStudent') -> find($fakestudent);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fakestudent  $fakestudent
     * @return \Illuminate\Http\Response
     */
    public function edit(fakestudent $fakestudent)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fakestudent  $fakestudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fakestudent $fakestudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fakestudent  $fakestudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(fakestudent $fakestudent)
    {
        //
    }
}
