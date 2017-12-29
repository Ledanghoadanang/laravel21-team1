@extends('layouts.admin.master')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Display all branchs</h3>
          <button type="button" class="btn btn-success" class="button" ><a href="{{ url ('/admin/branchs/create') }}" style="color:white;"> Add a branchs </a></button>
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
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.box -->


      <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  </div>
 @stop
