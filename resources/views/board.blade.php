@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Header</h1>
@stop

@section('content')
    <p>Content here</p>
    <div class="col-md-3 col-sm-6 col-12">
      <div class="card card-row card-secondary">
        <div class="card-header">
            <h3 class="card-title"> Backlog </h3>
            ::after
        </div>
      </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
