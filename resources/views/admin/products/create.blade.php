@extends('layouts.admin.master')
@section('content')
  {!! Form::open(['url' => 'admin/products']) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
