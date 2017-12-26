<form action="{{ url('admin/products/create') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="filesTest" required="true">
        <br/>
        @if ( $errors->has('image') )
          <span class="text-danger">
              <strong> {{ $errors->first('image') }}</strong>
          </span>
        @endif
  </form>
