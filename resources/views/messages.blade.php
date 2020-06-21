@extends('layouts.app')

@section('content')
 <h1>Messages</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name: {{ $message->name }}</li>
                <li class="list-group-item">E-mail: {{ $message->email }}</li>
                <li class="list-group-item">Message: {{ $message->message }}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p>Esta é a sidebar</p>
@endsection
