@extends('layouts.app')

@section('content')
    <h1>Messages</h1>


    @if(count($messages)>0)
    @foreach($messages as$message)
        <ul class="list-group">
            <li class="list-group-item">Nmae : {{$message->name}}</li>
            <li class="list-group-item">Email : {{$message->email}}</li>
            <li class="list-group-item">Message : {{$message->message}}</li>
        </ul>
        @endforeach
    @endif


@endsection


@section('sidebar')
    @parent
    <p>This is append to the sidebar.</p>
@endsection