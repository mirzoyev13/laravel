@extends('layouts.app')


@section('title-block', 'Contacts')

@section('content')
    <h1>Contact</h1>

    <form action="{{ route('contact-form') }}" method="post" class="communication">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" placeholder="For example: Logan" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" placeholder="example123@mail.ru" id="email">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input class="form-control" type="text" name="subject" placeholder=".." id="title-subject">
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success" id="btn-com">Send</button>
    </form>

@endsection
