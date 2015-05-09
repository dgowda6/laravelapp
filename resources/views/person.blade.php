@extends('temp')

@section('contents')
    <div class="quote">
        <h3>Person ID : {{$person->c_id}}</h3>
        <h3>Person Name : {{$person->name}}</h3>
    </div>
@stop