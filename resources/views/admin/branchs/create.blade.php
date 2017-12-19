@extends('layouts.admin.master')
@section('content')
  {!! Form::open(['url' => 'admin/branchs']) !!}
    @include('partials.forms.branch')
  {!! Form::close() !!}
@stop
