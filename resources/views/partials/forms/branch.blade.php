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
  {!! Form::label('id_style', 'Style') !!}
  <div class="form-controls">
    {!! Form::select('id_style', $styles, null, ['class' => 'form-control']) !!}
  </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
