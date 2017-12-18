@extends('layouts.shop.master')
@section('features-items')
  {!! Form::model($product, ['url' => 'products/' . $product->id, 'method' => 'put']) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
