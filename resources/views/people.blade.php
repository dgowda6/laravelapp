@extends('temp')

@section('contents')
    <div class="quote">
        <ul>
            @foreach($people as $person)

                <!--<li><a href="people/person/{{$person->c_id}}">{{ $person->name }}</a></li>-->
                
                <li><a href="{{ route('people_show', [$person->c_id]) }}">
                        {{ $person->name }}
                    </a>
                </li>

            @endforeach
        </ul>
        <div class="quote">
        <!--<a href="edit/{{$person->c_id}}">Edit</a>-->
        <a href="{{ route('people_create') }}" style="font-weight: bold; font-size:24px;">
            Add
        </a>
    </div>
    </div>
@stop