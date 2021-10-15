@extends('layouts.app')

@section('title-block', 'Main page')

@section('content')
    <h1>Main Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi consectetur,
        consequuntur cupiditate dolorum error eum explicabo facere illum magnam, natus,
        nostrum nulla quia ratione velit? Adipisci dicta itaque iure? </p>
@endsection

@section('aside')
    @parent
    <p>Alias animi consectetur, consequuntur cupiditate dolorum error eum</p>

@endsection

