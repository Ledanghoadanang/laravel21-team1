@extends('layouts.admin.master')
@section('content')
<a href="{{url('/admin')}}">Back to over view</a>
<h2>Edit a style</h2>
  {!! Form::model($product, ['url' => 'admin/products/' . $product->id, 'method' => 'put']) !!}
    @include('partials.forms.product')
  {!! Form::close() !!}
@stop
