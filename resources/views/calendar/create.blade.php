@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />

    <div>
      <label for="meeting-time">Choose a start Time:</label>
      <input type="start" id="meeting-time"
        name="meeting-time" value="2018-06-12T19:30"
        min="2018-06-07T00:00" max="2018-06-14T00:00">
      <label for="meeting-time">Choose an End Time:</label>
      <input type="end" id="meeting-time"
         name="meeting-time" value="2018-06-12T19:30"
         min="2018-06-07T00:00" max="2018-06-14T00:00">
    </div>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
@stop
