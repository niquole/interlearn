@extends('layouts.app')

@section('content')
    <burger-menu-component></burger-menu-component>
    <create-quiz-component data-user="{{ json_encode(\Auth::user()) }}"></create-quiz-component>
    <footer-component></footer-component>

@endsection
