@extends('temp')

@section('contents')
    <!--<div class="quote">
        <h3>Person ID : {{$person->c_id}}</h3>
        <h3>Person Name : {{$person->name}}</h3>
    </div>-->
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