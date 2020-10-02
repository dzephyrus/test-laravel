<!-- ke thua view master trong folder layout -->
@extends('fakestudent-layout.master')

<!-- thay doi noi dung don gian -->
@section('title', 'Title list')

<!-- thay doi noi dung phuc tap -->
@section('header', 'header list extends')

@section('sidebar')
@parent
<span> login</span>
@endsection
@section('content')
    <form action="{{ route('post-login') }}" method="POST">
        @csrf 
        <input type="text" name="username" placeholder="account name">
        <input type="password" name="pass" placeholder="password">
        <button type="submit" name="">login</button>
    </form>
    <!--footer  -->
@endsection
@section('footer', 'Footer login')