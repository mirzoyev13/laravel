@extends('layouts.app')

@section('title-block')
     {{ $data->name }}
@endsection



@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">
            <p>Message: {{ $data->message }}</p>
            <p>Email: {{ $data->email }}</p>
            <p>Subject: {{ $data->subject }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{route('contact-update', $data->id)}}"><button class="btn btn-dark">Edit</button></a>
            <a href="{{route('contact-delete', $data->id)}}" ><button class="btn btn-danger">Delete</button></a>
        </div>
@endsection

