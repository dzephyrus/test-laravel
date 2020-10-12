<?php

namespace App\Http\Controllers;
use DB;
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
        $student = new fakestudent;

        $student->fakeStudent_name = $request->fakeStudent_name;
        // ....
        $student->save();
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
    public function edit(fakestudent $FakeStudent)
    {
        //
        return view('student.edit', ['student' => $FakeStudent]);

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
        // dd($request->all());
        $updateStudent = fakestudent::find($request->id);
        //gan gia tri moi cho cac thuoc tinh cuar student can update
        $updateStudent->fakeStudent_name = $request->fakeStudent_name;
        $updateStudent->fakeStudent_class = $request->fakeStudent_class;
        $updateStudent->gender = $request->gender;
        $updateStudent->age = $request->age;
        // Thuc hien goi phuong thuc save() de luu du lieu
        
        $updateStudent->save();
        
        // Cach 2: $student->update(['name' => $request->name]);
        // $fakestudent->update(['fakestudent_name' => $request->fakeStudent_name]);
        // $fakestudent->update(['fakestudent_class' => $request->fakeStudent_class]);
        // $fakestudent->update(['gender' => $request->gender]);
        // $fakestudent->update(['age' => $request->age]);
        // hoac $fakestudent->update([$request->all()]);
        // Khong can save

        return redirect()->route('FakeStudent.index');

        // $data = fakeStudent::findOrFail($fakestudent->id)->update($request->all());
        // return redirect()->route('FakeStudent.index')->with('msg', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fakestudent  $fakestudent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // dd($id);
        // Kiem tra ton tai sinh vien -> xoa
        // if($fakestudent) {
        //     $fakestudent->delete(); // tra ve ket qua true/false
        // }
        $deleteStudent = fakestudent::find($id);
        $deleteStudent->delete();
        // Cach 2: Student::destroy($student->id); // tra ve so luong ban ghi bi xoa
        // Redirect ve danh sach (co thuc hien truy van lay ds moi)
        return redirect()->route('FakeStudent.index');
    }
}
