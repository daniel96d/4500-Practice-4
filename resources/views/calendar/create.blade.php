@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />

    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
@stop
