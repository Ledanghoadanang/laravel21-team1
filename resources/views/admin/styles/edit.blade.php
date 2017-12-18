@extends('layouts.admin.master')
@section('content')
<a href="{{url('/admin')}}">Back to over view</a>
<h2>Edit a style</h2>
  {!! Form::model($style, ['url' => 'admin/styles/' . $style->id, 'method' => 'put']) !!}
    @include('partials.forms.style')
  {!! Form::close() !!}
@stop
