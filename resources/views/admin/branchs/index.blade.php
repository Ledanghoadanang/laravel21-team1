@extends('layouts.admin.master')
@section('menu')
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">QUẢN LÝ ADMIN ROUTES </li>
  <li><a href="{{ url ('/admin/styles') }}"><i class="fa fa-book"></i> <span>Styles</span></a></li>
  <li><a href="{{ url ('/admin/products') }}"><i class="fa fa-book"></i> <span>Products</span></a></li>
  <li><a href="{{ url ('/admin/branchs') }}" class="adminactive"><i class="fa fa-book"></i> <span>Branchs</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}"><i class="fa fa-book"></i> <span>Orders</span></a></li>
  <li><a href="{{ url ('/admin/products') }}"><i class="fa fa-book"></i> <span>Customers</span></a></li>
</ul>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Display all branchs</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/branchs/create') }}" style="color:white;" > Add a branchs </a></button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Style</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <?php $i=1;?>
            @foreach($branchs as $branch)
            <tr>
              <td> <h4>{{ $i }}</h4></td>
              <td> <h4>{{ $branch->name }}</h4></td>
              <td> <h4>{{ $branch->style_id }}</h4></td>
              <td><a href="{{url('admin/branchs/' . $branch->id . '/edit')}}">Edit </a></td>
              <td><a href="{{url('admin/branchs/' . $branch->id . '/delete')}}">Delete</a></td>
            </tr>
            <?php $i=$i+1 ?>
            @endforeach

          </table>
        </div>
        <!-- /.box-body -->
          {!! $branchs->links(); !!}
        </div>
      </div>
      <!-- /.box -->


      <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  </div>
 @stop
