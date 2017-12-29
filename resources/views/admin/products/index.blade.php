@extends('layouts.admin.master')
@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Display all products</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/products/create') }}" style="color:white;"> Add a products </a></button>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px; ">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"  style="margin-top:.1em;";>

              <div class="input-group-btn" >
                <button type="submit" class="btn btn-default"  style="margin-top:.1em;"><i class="fa fa-search"></i></button>
              </div>
            </div>
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
              <th>Branch_id</th>
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
                <td> <h4>{{ $product->branch_id }}</h4></td>
                <td><a href="{{url('admin/products/' . $product->id . '/edit')}}">Edit </a></td>
                <td><a href="{{url('admin/products/' . $product->id . '/delete')}}">Delete</a></td>
              </tr>
            <?php $i=$i+1 ?>
            @endforeach
          </table>

        </div>
            {!! $products->links(); !!}
        <!-- /.box-body -->

      </div>
      <!-- /.box -->


      <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  </div>



 @stop
