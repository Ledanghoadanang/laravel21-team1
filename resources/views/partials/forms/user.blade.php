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
  {!! Form::label('email', 'Email') !!}
  <div class="form-controls">
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('email') )
    <span class="text-danger">
        <strong> {{ $errors->first('email') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('password', 'Password') !!}
  <div class="form-controls">
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('password') )
    <span class="text-danger">
        <strong> {{ $errors->first('password') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('phone', 'Phone Number') !!}
  <div class="form-controls">
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('phone') )
    <span class="text-danger">
        <strong> {{ $errors->first('phone') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('adress', 'Address') !!}
  <div class="form-controls">
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('adress') )
    <span class="text-danger">
        <strong> {{ $errors->first('edress') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('gender', 'Gender') !!}
  <div class="form-controls">
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('gender') )
    <span class="text-danger">
        <strong> {{ $errors->first('gender') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('role', 'Role') !!}
  <div class="form-controls">
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('role') )
    <span class="text-danger">
        <strong> {{ $errors->first('role') }}</strong>
    </span>
  @endif
</div>

{!! Form::submit('Save User', ['class' => 'btn btn-primary']) !!}
