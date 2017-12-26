@extends('layouts.admin.master')
@section('content')
  {!! Form::open(['url' => 'admin/products', 'files'=>true]) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
