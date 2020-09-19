@extends("layout")

@section("content")

<div class="container">
	<h2>Edit Receipe</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form action="/receipe/{{$receipe->id}}" method="post">
		@csrf
		@method("PATCH")
	<div class="form-group">
	<label for="name">Receipe Name</label>
	<input type="text" name="name" class="form-control" value="{{ $receipe->name }}">
	</div>

	<div class="form-group">
	<label for="ingredients">Ingredients</label>
	<textarea name="ingredients" class="form-control">{{ $receipe->ingredients }}</textarea>
	</div>
<!-- 
	<div class="form-group">
	<label for="category">Category</label>
	<input type="text" name="category" class="form-control" value="{{ $receipe->category}}">
	</div> -->
	<div class="form-group">
		<select name="category" class="form-control">
			@foreach($category as $value)
			<option value="{{ $value->id }}"
				{{ $receipe->categories->id == $value->id ? "selected" : "" }}>
			 {{ $value->name }} </option>
				}
			@endforeach
		</select>
	</div>
	
	<button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
@endsection