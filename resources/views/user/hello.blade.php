@extends('layout.master')
@section('title', 'hello')
@section('Content')
<h1>สวัสดีคุณ</h1>
ชื่อ {{$name}} นามสกุล {{$surname}} อายุ {{$age}}
@endsection
