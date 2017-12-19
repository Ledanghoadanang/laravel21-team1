@extends('layouts.admin.master')
@section('content')
<a href="{{url('/admin/branchs')}}">Back to over view</a>
<h2>Edit a style</h2>
  {!! Form::model($branch, ['url' => 'admin/branchs/' . $branch->id, 'method' => 'put']) !!}
    @include('partials.forms.branch')
  {!! Form::close() !!}
@stop
