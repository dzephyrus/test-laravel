@extends('admin-layout.master')

@section('title', 'edit student')

@section('content-header', "edit student $student->fakeStudent_name")

@section('content')
<form method="POST" action="{{route('FakeStudent.update', $student->id)}}">
    @csrf
  <div class="form-row">
    <div class="col">
      <input type="hidden" name="_method" value="PUT" name="FirstName" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <label for="">name</label>
      <input type="text" name="name" class="form-control" value="{{$student->fakeStudent_name}}" placeholder="Last name">
    </div>
    <div class="col">
        <label for="">class</label>
      <input type="text" class="form-control" name="class" value="{{$student->fakeStudent_class}}" placeholder="Last name">
    </div>
    <div class="col">
        <label for="">gender</label>
      <!-- <input type="number" class="form-control" value="{{$student->gender}}" placeholder="Last name"> -->
      <input type="radio" id="male" name="gender" value="1" checked="{{$student->gender ===1}}">
      <label class="form-check-label" for="male">
            nam
          </label>
      <input type="radio" id="female" name="gender" value="2" checked="{{$student->gender ===2}}">
      <label class="form-check-label" for="female">
            nữ
          </label>
    </div>
    <div class="col">
        <label for="">age</label>
      <input type="number" class="form-control" name="age" value="{{$student->age}}" placeholder="Last name">
    </div>
  </div>
  <div class="w-100">
      <button type="submit">update</button>
  </div>
  <div class="col-12">
sadasd asd

  </div>
</form>
@endsection