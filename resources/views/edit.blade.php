@extends('temp')

@section('contents')
    <div>
        <a href="{{ route('people') }}" style="font-weight: bold; font-size:24px;">Home</a>
    </div>
    <div class="quote row">
    {!! Form::model($person, ['route' => ['people_update', $person->c_id], 'method' => 'PATCH', 'class' => 'form-horizontal' ]) !!}
        
            <div class="form-group">
                {!! Form::label('labelID', 'ID :', ['class' => 'control-label col-md-5']) !!}
                <div class="col-md-7" style="padding-top: 10px;">
                    {!! Form::input('text', 'c_id', null, ['class' => 'form-control input-md']) !!}
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('labelID', 'Name :', ['class' => 'control-label col-md-5']) !!}
                <div class="col-md-7" style="padding-top: 10px;">
                    {!! Form::input('text', 'name', null, ['class' => 'form-control input-md']) !!}
                </div>
            </div>
                
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        
    {!! Form::close() !!}
    </div>
@stop