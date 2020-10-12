<!-- ke thua view master trong folder layout -->
@extends('fakestudent-layout.master')

<!-- thay doi noi dung don gian -->
@section('title', 'Title list')

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
    @foreach($fakestudent as  $student)
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
        <td>
        <form action="{{ route('FakeStudent.edit', $student->id )}}" method="get">
            @csrf
            <button type="submit">EDIT</button>
          </form>
          <form action="{{ route('FakeStudent.destroy', $student->id )}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE"></input>
            <button type="submit" >DELETE</button>
          </form>
          
          <!-- <a href="{{ route('FakeStudent.destroy', $student->id)}}"><button class="btn">delete</button></a></td> -->
    </tr>
    @endforeach
    <!-- them dong de hien thi nut phan trang -->
    
  </tbody>
</table>

@endsection

@section('footer', 'Footer list extends')