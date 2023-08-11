@extends('layouts.main')
@include('layouts.partials.navbar')

@section('content')


    <div class="container text-left">
        <div class="col-12  d-flex justify-content-center align-items-center" style="margin-bottom: 30px">
            <img src="{{ Storage::url('public/posts/') . $books['image'] }}" class="rounded" style="width: 800px ">
        </div>
        <hr>
        <h2>{{ $books['title'] }}</h2>
        <h5>Authhor :{{ $books['author'] }}</h5>
        <h5>Publisher :{{ $books['publisher'] }}</h5>
        <p>Sinopsis:</p>
        <p>{{ $books['description'] }}</p>
