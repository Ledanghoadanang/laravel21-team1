@extends('layouts.admin.master')
@section('menu')
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">QUẢN LÝ ADMIN ROUTES </li>
  <li><a href="{{ url ('/admin/styles') }}"><i class="fa fa-book"></i> <span>Styles</span></a></li>
  <li><a href="{{ url ('/admin/products') }}"><i class="fa fa-book"></i> <span>Products</span></a></li>
  <li><a href="{{ url ('/admin/branchs') }}"><i class="fa fa-book"></i> <span>Branchs</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}" class="adminactive"><i class="fa fa-book"></i> <span>Orders</span></a></li>
  <li><a href="{{ url ('/admin/customers') }}"><i class="fa fa-book"></i> <span>Customers</span></a></li>
</ul>
@stop
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <div class="input-group">
          <!-- //form seach -->
          <form class="navbar-form navbar-left" action="/admin/search_order" role="search" method="GET" >
            {!!Form::label('From', null, ['class' => 'form-control'])!!}
            {!! Form::date('date_start', null, ['class' => 'form-control']) !!}
            {!!Form::label('to', null, ['class' => 'form-control'])!!}
            {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
            {!!Form::label('Details', null, ['class' => 'form-control'])!!}
            <div class="form-group">
              <input type="text" class="form-control" name="search_order"  value="{{ isset($_GET['search_order']) ? $_GET['search_order'] : '' }}">
              &nbsp;&nbsp;&nbsp;
              <button type="submit"  class="btn btn-info">sreach</button>
            </div>
          </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table  id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Ngày Đặt Hàng</th>
                <th>Trạng Thái</th>
                <th>Địa Chỉ Giao Hàng</th>
                <th>Tình Trạng Giao Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Tên Người Nhận</th>
                <th>Người Đặt Hàng</th>
                <th>Hủy Đơn Đặt Hàng</th>
                <th>Xem Chi Tiết</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
              <tr>
                <td>{{ $order ->id}}</td>
                <td>{{ $order ->date}}</td>
                <td>{{ $order ->status}}</td>
                <td>{{ $order ->address_order}}</td>
                <td>{{ $order ->shipping_status}}</td>
                <td>{{ $order ->phone}}</td>
                <td>{{ $order ->name_receiver}}</td>
                <td>{{ App\User::find($order->user_id)->name}}</td>
                <td style="text-align: center;">
                  <a href="{{ url('admin/carts/' . $order->id . '/cancel')}}">
                  Hủy
                  </a>
                </td>
                <td><a href="{{ url('admin/carts/' . $order->id .'/orderdetais') }}">Xem chi tiết</a></td>
              </tr>
              @endforeach
            </tbody>
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
