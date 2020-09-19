@extends("layout")


@section("content")
<div class="container">
<h2> Menu&raquo;{{ $receipe->name }}</h2>
<li>Ingredients-{{$receipe->ingredients }}</li>
<li>Category-{{$receipe->categories->name }}</li>

<a href="/receipe/{{ $receipe->id }}/edit"><button class="btn btn-primary">Edit</button></a>
<br><hr>
<form method="post" action="/receipe/{{$receipe->id}}">
	@csrf
	@method("DELETE")
	<button class="btn btn-primary">Delete</button>
</form>


</div>

@endsection