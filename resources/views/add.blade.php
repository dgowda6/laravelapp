@extends('temp')

@section('contents')
    <div>
        <a href="{{ route('people') }}" style="font-weight: bold; font-size:24px;">Home</a>
    </div>
    <div class="quote row">
    {!! Form::open(['route' => 'people_store', 'class' => 'form-horizontal' ]) !!}
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('labelID', 'Name :', ['class' => 'control-label col-md-5']) !!}
                <div class="col-md-7" style="padding-top: 10px;">
                    {!! Form::input('text', 'name', null, ['class' => 'form-control input-md']) !!}
                    {!! $errors->first('name', '<span class="help-block error-help">:message</span>') !!}
                </div>
            </div>
                
            <div class="form-group">
                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
            </div>
        
    {!! Form::close() !!}
    </div>
@stop