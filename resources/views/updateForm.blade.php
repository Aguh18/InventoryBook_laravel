@extends('layouts.main')

@include('layouts.partials.navbar')

@section('content')
<div>
    <form action="/edit/{{$book['id']}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" value="{{$book['title']}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Sampul</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div style="display: flex; justify-content: center; align-items: center;">
            <button type="submit" class="btn btn-primary center-button">Submit</button>
        </div>
    </form>
</div>
@endsection
