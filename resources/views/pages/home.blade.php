@extends('layouts.app')

@section('content')

<h1>{{$things['title']. 2 }}</h1>

    @if(count($things) > 0 )
        <ul>
            @foreach($things as $thing)
                <li>{{dd($thing->services)}}</li>
            @endforeach
        </ul>
    @endif   
@endsection

