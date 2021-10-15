@extends('layouts.app')

@section('title-block', 'Messages')

@section('content')
    <h1>Messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>Name: {{ $el->name }}</h3>
            <p>Email: {{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">Details</button></a>
        </div>
    @endforeach

@endsection

