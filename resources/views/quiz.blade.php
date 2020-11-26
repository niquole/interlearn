@extends('layouts.app')

@section('content')
    <quiz-component dataquiz="{{json_encode($quiz)}}" ></quiz-component>
@endsection
