@extends('temp')

@section('contents')
    <div class="quote">
        <h3>Person ID : {{$person->c_id}}</h3>
        <h3>Person Name : {{$person->name}}</h3>
    </div>
    <div class="quote">
        <!--<a href="edit/{{$person->c_id}}">Edit</a>-->
        <a href="{{ route('people_edit', [$person->c_id]) }}">
            Edit
        </a>
    </div>
@stop