@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')
    <h1>Calendar Event</h1>
@stop

@section('content')
<h2>{{ $calendar->title; }}</h2>
  <div><p>Start Time: {{ $calendar->start; }}</p></div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
