@extends('layouts.admin.master')

@section('menu')
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">QUẢN LÝ ADMIN ROUTES </li>
  <li><a href="{{ url ('/admin/styles') }}"><i class="fa fa-book"></i> <span>Styles</span></a></li>
  <li><a href="{{ url ('/admin/products') }}"><i class="fa fa-book"></i> <span>Products</span></a></li>
  <li><a href="{{ url ('/admin/branchs') }}"><i class="fa fa-book"></i> <span>Branchs</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}"><i class="fa fa-book"></i> <span>Orders</span></a></li>
  <li><a href="{{ url ('/admin/customers') }}" class="adminactive"><i class="fa fa-book"></i> <span>Customers</span></a></li>
</ul>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Display all user: admin, employee, customers</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/users/create') }}" style="color:white;"> Add a users </a></button>
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
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Gender</th>
              <th>Role</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <?php $i=1;?>
            @foreach($users as $user)
              <tr>
                <td> <h4>{{ $i}}</h4></td>
                <td> <h4>{{ $user->name }}</h4></td>
                <td> <h4>{{ $user->email }}</h4></td>
                <td> <h4>0{{ $user->phone }}</h4></td>
                <td> <h4>{{ $user->address }}</h4></td>
                <td> <h4>{{ $user->gender }}</h4></td>
                @if(($user->role)==1)
                <td> <h4>Admin</h4></td>
                @else
                <td> <h4>Customer</h4></td>
                @endif
                <td><a href="{{url('admin/customers/' . $user->id . '/edit')}}">Edit </a></td>
                <td><a href="{{url('admin/customers/' . $user->id . '/delete')}}">Delete</a></td>
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
