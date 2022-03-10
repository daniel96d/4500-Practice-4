@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start" type="datetime-local" min="2022-01-01T00:00" max="2023-01-01T00:00" label="Start" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
@stop
