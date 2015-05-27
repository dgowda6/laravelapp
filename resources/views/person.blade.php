@extends('temp')

@section('contents')
    <div>
        <a href="{{ route('people') }}" style="font-weight: bold; font-size:24px;">Home</a>
    </div>
    <div class="quote">
        <h3>Person ID : {{$person->c_id}}</h3>
        <h3>Person Name : {{$person->name}}</h3>
    </div>
    <div class="quote">
        <!--<a href="edit/{{$person->c_id}}">Edit</a>-->
        <a href="{{ route('people_edit', [$person->c_id]) }}" style="font-weight: bold;">
            Edit
        </a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['people_destroy', $person->c_id] ]) !!}
            {!! Form::submit('Delete', ['class' => 'span-delete']) !!}        
        {!! Form::close() !!}
    </div>
@stop