@extends('layouts.admin.master')
@section('content')
<h2>List all products</h2>
<h2>
  <a href="{{ url ('/admin/branchs/create') }}"> Add a products </a>
</h2>
<table>
  <tr>

    <th>STT</th>
    <th>Name</th>
    <th>id_style</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php $i=1;?>
  @foreach($branchs as $branch)
    <tr>

      <td> <h4>{{ $i }}</h4></td>
      <td> <h4>{{ $branch->name }}</h4></td>
      <td> <h4>{{ $branch->id_style }}</h4></td>
      <td><a href="{{url('admin/branchs/' . $branch->id . '/edit')}}">Edit </a></td>
      <td><a href="{{url('admin/branchs/' . $branch->id . '/delete')}}">Delete</a></td>
    </tr>
  <?php $i=$i+1 ?>
  @endforeach
</table>
 @stop
