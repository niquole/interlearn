@extends('layouts.app')

@section('content')

    <burger-menu-component></burger-menu-component>
    <create-lesson-component data-user="{{ json_encode(\Auth::user()) }}"></create-lesson-component>
    <footer-component></footer-component>

    
@endsection
