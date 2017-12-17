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
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
