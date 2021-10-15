@extends('layouts.app')


@section('title-block', 'Update notation')

@section('content')
    <h1>Update notation</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post" class="communication">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" value="{{$data->name}}" name="name" placeholder="For example: Logan" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" value="{{$data->email}}" name="email" placeholder="example123@mail.ru" id="email">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input class="form-control" type="text" value="{{$data->subject}}" name="subject" placeholder=".." id="title-subject">
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success" id="btn-com">Update</button>
    </form>

@endsection
