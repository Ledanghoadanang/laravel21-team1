@extends('layouts.admin.master')
@section('content')
<h2>List all products</h2>
<h2>
  <a href="{{ url ('/admin/products/create') }}"> Add a products </a>
</h2>
<table>
  <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Image</th>
    <th>Description</th>
    <th>id_branch</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php $i=1;?>
  @foreach($products as $product)
    <tr>
      <td> <h4>{{ $i }}</h4></td>
      <td> <h4>{{ $product->name }}</h4></td>
      <td> <h4>{{ $product->quantity }}</h4></td>
      <td> <h4>{{ $product->price }}</h4></td>
      <td> <h4><img src="/images/products/{{$product->image}}" width="50px" height="50px"></h4></td>
      <td> <h4>{{ $product->description }}</h4></td>
      <td> <h4>{{ $product->id_branch }}</h4></td>
      <td><a href="{{url('admin/products/' . $product->id . '/edit')}}">Edit </a></td>
      <td><a href="{{url('admin/products/' . $product->id . '/delete')}}">Delete</a></td>
    </tr>
  <?php $i=$i+1 ?>
  @endforeach
</table>
 @stop
