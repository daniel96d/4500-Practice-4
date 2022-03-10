@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input type="datetime-local" id="meeting-time"
       name="meeting-time" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00">
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
