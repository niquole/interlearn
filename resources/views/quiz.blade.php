@extends('layouts.app')

@section('content')
    <burger-menu-component></burger-menu-component>
    <quiz-component dataquiz="{{json_encode($quiz)}}" ></quiz-component>
    <footer-component></footer-component>

@endsection
