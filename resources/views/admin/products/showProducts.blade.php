@extends('layouts.admin.master')

@section('menu')
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">QUẢN LÝ ADMIN ROUTES </li>
  <li><a href="{{ url ('/admin/styles') }}"><i class="fa fa-book"></i> <span>Styles</span></a></li>
  <li><a href="{{ url ('/admin/products') }}" class="adminactive"><i class="fa fa-book"></i> <span>Products</span></a></li>
  <li><a href="{{ url ('/admin/branchs') }}"><i class="fa fa-book"></i> <span>Branchs</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}"><i class="fa fa-book"></i> <span>Orders</span></a></li>
  <li><a href="{{ url ('/admin/customers') }}"><i class="fa fa-book"></i> <span>Customers</span></a></li>
</ul>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Display all products</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/products/create') }}" style="color:white;"> Add a products </a></button>
          <div class="box-tools">

            <form action="/admin/products/search" method="GET" role="search" class="title text-center searchform">
            	{{ csrf_field() }}
              <div class="input-group input-group-sm" style="width: 150px; ">
                <input type="text" name="product-search" class="form-control pull-right" placeholder="Search"  value="{{ isset($_GET['product-search']) ? $_GET['product-search'] : ''}}" style="margin-top:.1em;";>
                <div class="input-group-btn" >
                  <button type="submit" class="btn btn-default"  style="margin-top:.1em;"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Image</th>
              <th>Description</th>
              <th>Branch</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <?php $i=1;?>
            @foreach($products as $product)
              <tr>
                <td> <h4>{{ $i}}</h4></td>
                <td> <h4>{{ $product->name }}</h4></td>
                <td> <h4>{{ $product->quantity }}</h4></td>
                <td> <h4>{{ $product->price }}</h4></td>
                <td> <h4><img src="/images/products/{{$product->image}}" width="50px" height="50px"></h4></td>
                <td> <h4>{{ $product->description }}</h4></td>
                <td> <h4>{{ $product->branch->name }}</h4></td>
                <td><a href="{{url('admin/products/' . $product->id . '/edit')}}">Edit </a></td>
                <td><a href="{{url('admin/products/' . $product->id . '/delete')}}">Delete</a></td>
              </tr>
            <?php $i=$i+1 ?>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
  </div>



 @stop
