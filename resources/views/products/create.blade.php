@extends('layouts.frontend.master')
@section('features-items')
  {!! Form::open(['url' => '/products', 'files'=>true]) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
