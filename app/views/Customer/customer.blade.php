@extends('layout')

@section('content')
    @foreach($customers as $user)
        <p>{{ $user->email }} {{ $user->name }}</p>
    @endforeach
@stop