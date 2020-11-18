@extends('layouts.app')

@section('content')
    <create-lesson-component data-user="{{ json_encode(\Auth::user()) }}"></create-lesson-component>
@endsection
