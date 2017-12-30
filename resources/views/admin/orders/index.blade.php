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
          <h3 class="box-title">Hiển thị tất cả Đơn hàng đã order</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/carts/manage') }}" style="color:white;"> Hiển thị tất cả </a></button>
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
