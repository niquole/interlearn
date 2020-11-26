@extends('layouts.app')

@section('content')
    <lesson-component datalesson="{{json_encode($lesson)}}"></lesson-component>
@endsection
