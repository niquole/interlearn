@extends('layouts.app')

@section('content')
    <create-quiz-component data-user="{{ json_encode(\Auth::user()) }}"></create-quiz-component>
@endsection
