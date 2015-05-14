@extends('temp')

@section('contents')
    <div class="quote">
        <ul>
            @foreach($people as $person)
                <li><a href="./person/{{$person->c_id}}">{{ $person->name }}</a></li>
            @endforeach
        </ul>
    </div>
@stop