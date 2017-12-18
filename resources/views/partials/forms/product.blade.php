<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
    @if ( $errors->has('name') )
      <span class="text-danger">
          <strong> {{ $errors->first('name') }}</strong>
      </span>
    @endif
</div>

<div class="form-group">
  {!! Form::label('quantity', 'Quantity') !!}
  <div class="form-controls">
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('quantity') )
    <span class="text-danger">
        <strong> {{ $errors->first('quantity') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('price', 'Price') !!}
  <div class="form-controls">
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('price') )
    <span class="text-danger">
        <strong> {{ $errors->first('price') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('image', 'Image') !!}
  <div class="form-controls">
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('image') )
    <span class="text-danger">
        <strong> {{ $errors->first('image') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  <div class="form-controls">
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('description') )
    <span class="text-danger">
        <strong> {{ $errors->first('description') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('id_branch', 'Branch') !!}
  <div class="form-controls">
    {!! Form::select('id_branch', $branchs, null, ['class' => 'form-control']) !!}
  </div>
</div>

{!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}
