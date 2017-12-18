@extends('layouts.shop.master')
@section('features-items')
  {!! Form::open(['url' => '/products']) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
