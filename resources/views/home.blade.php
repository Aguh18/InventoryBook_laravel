@extends('layouts.main')
@include('layouts.partials.navbar')

@section('content')
@foreach ($books as $book)


<div class="container text-left">
    <div class="row">
      <div class="col">
        <img src="{{ Storage::url('public/posts/').$book['image'] }}" class="rounded" style="width: 200px ">
      </div>
      <div class="col">
        <a href="/detail/{{$book['id']}}"><h2>{{$book['title']}}</h2></a>
        <h5>Authhor     :{{$book['author']}}</h5>
        <h5>Publisher   :{{$book['publisher']}}</h5>
      </div>
    </div>
  </div>




</form>
<hr>


@endforeach

@endsection
