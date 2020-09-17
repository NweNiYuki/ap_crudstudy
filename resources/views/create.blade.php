@extends("layout")

@section("content")

<div class="container">
	<h2>Add New Receipe</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<form action="/receipe" method="post">
		@csrf
	<div class="form-group">
	<label for="name">Receipe Name</label>
	<input type="text" name="name" class="form-control" value="{{old('name')}}">
	</div>

	<div class="form-group">
	<label for="ingredients">Ingredients</label>
	<textarea name="ingredients" class="form-control">{{old('ingredients')}}</textarea>
	</div>

	<div class="form-group">
	<label for="category">Category</label>
	<input type="text" name="category" class="form-control" value="{{old('category')}}">
	</div>
	
	<button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection