@extends('layouts.admin.master')
@section('content')
  {!! Form::open(['url' => 'admin/styles']) !!}
    @include('partials.forms.style')
  {!! Form::close() !!}
@stop
