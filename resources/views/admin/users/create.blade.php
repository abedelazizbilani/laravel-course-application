@extends('layouts.admin')

@section('content')
    <h1>
        Create User
    </h1>

    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
            <div class="col-md-4">
                <input class="form-control" name="name" type="text" id="name">
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


        <div class="box-footer text-right">
            {{ Form::submit('Submit') }}
        </div>
    {!! Form::close() !!}
@stop