<!-- ke thua view master trong folder layout -->
@extends('fakestudent-layout.master')

<!-- thay doi noi dung don gian -->
@section('title', 'chi tiết sinh viên')

<!-- thay doi noi dung phuc tap -->
@section('header', 'Header List Extends')

@section('sidebar')
@parent
<span> student list</span>
@endsection
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">class</th>
      <th scope="col">gender</th>
      <th scope="col">id gender</th>
      <th scope="col">age</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
        <td><a href="/FakeStudent/{{$student->id}}">{{ $student->fakeStudent_name }}</a></td>
        <td>{{ $student->fakeStudent_class }}</td>
        <td>
            @if ($student -> gender == 1 )
            Female
            @elseif ($student-> gender ==2 )
            Male
            @else
            nothing
            @endif
        </td>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->age }}</td>
        
    </tr>
  </tbody>
</table>

@endsection

@section('footer', 'Footer list extends')