@extends('layouts.main')
@include('layouts.partials.navbar')

@section('content')

@foreach ($books as $book)

<h2>{{$book['title']}}</h2>
<img src="{{ Storage::url('public/posts/').$book['image'] }}" class="rounded" style="width: 150px">
<form method="post" action="/delete/{{$book['id']}}">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
</form>
<form method="get" action="/edit/{{$book['id']}}">
<button type="submit">edit</button>
</form>
<hr>


@endforeach

@endsection
