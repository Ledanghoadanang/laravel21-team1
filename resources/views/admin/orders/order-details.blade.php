@extends('layouts.admin.master')
@section('menu')
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">QUẢN LÝ ADMIN ROUTES </li>
  <li><a href="{{ url ('/admin/styles') }}"><i class="fa fa-book"></i> <span>Styles</span></a></li>
  <li><a href="{{ url ('/admin/products') }}"><i class="fa fa-book"></i> <span>Products</span></a></li>
  <li><a href="{{ url ('/admin/branchs') }}"><i class="fa fa-book"></i> <span>Branchs</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}"><i class="fa fa-book"></i> <span>Orders</span></a></li>
  <li><a href="{{ url ('/admin/carts/manage') }}" class="adminactive"><i class="fa fa-book"></i> <span>Orders-Details</span></a></li>
</ul>
@stop
@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Hiển thị tất cả các Order</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/carts/manage') }}" style="color:white;"> Hiển thị</a></button>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table  id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Số lượng</th>
                <th>Đơn Giá</th>
                <th>Thành Tiền</th>
                <th>Mã Đơn Hàng</th>
                <th>Tên Sản Phẩm</th>
              </tr>
            </thead>
            <tbody>
              <?php  $total = 0; ?>
              @foreach ($items as $item)
              <tr>
                <td>{{ $item ->id}}</td>
                <td>{{ $item ->quantity}}</td>
                <td>{{ number_format($item ->total_price/$item ->quantity, '2', ',', '.') . ' VNĐ'}}</td>
                <td>{{ number_format($item ->total_price, '2', ',', '.') . ' VNĐ'}}</td>
                <td>{{ $item ->order_id}}</td>
                <?php $product = App\Product::find($item->product_id); ?>
                @if (empty($product))
                <td> Sản Phẩm đã xóa hoặc ngừng kinh doanh</td>
                @else
                <td>{{ $product->name}}</td>
                @endif
              </tr>
              <?php $total+=$item->total_price ?>
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
