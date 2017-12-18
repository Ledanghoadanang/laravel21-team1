@extends('layouts.admin.master')
@section('content')
<h2>List all styles</h2>
<h2>
  <a href="{{ url ('/admin/styles/create') }}"> Add a styles </a>
</h2>
<table>
  <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php $i=1;?>
  @foreach($styles as $style)
    <tr>
      <td> <h4>{{ $i }}</h4></td>
      <td> <h4>{{ $style->name }}</h4></td>
      <td><a href="{{url('admin/styles/' . $style->id . '/edit')}}">Edit </a></td>
      <td><a href="{{url('admin/styles/' . $style->id . '/delete')}}">Delete</a></td>
    </tr>
  <?php $i=$i+1 ?>
  @endforeach
</table>
 @stop
