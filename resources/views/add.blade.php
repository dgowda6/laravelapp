@extends('temp')

@section('contents')
    <div class="quote row">
    {!! Form::open(['route' => 'people_store', 'class' => 'form-horizontal' ]) !!}
            
            <div class="form-group">
                {!! Form::label('labelID', 'Name :', ['class' => 'control-label col-md-5']) !!}
                <div class="col-md-7" style="padding-top: 10px;">
                    {!! Form::input('text', 'name', null, ['class' => 'form-control input-md']) !!}
                </div>
            </div>
                
            <div class="form-group">
                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
            </div>
        
    {!! Form::close() !!}
    </div>
@stop