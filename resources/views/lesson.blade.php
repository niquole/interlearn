@extends('layouts.app')

@section('content')
    <burger-menu-component></burger-menu-component>
    <lesson-component datalesson="{{json_encode($lesson)}}"></lesson-component>
    <footer-component></footer-component>

@endsection
