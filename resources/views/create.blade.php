@extends("layout")

@section("content")

<div class="container">
	<h2>Add New Receipe</h2>
	<form action="/receipe" method="post">
		@csrf
	<div class="form-group">
	<label for="name">Receipe Name</label>
	<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
	<label for="ingredients">Ingredients</label>
	<textarea name="ingredients" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<label for="category">Category</label>
	<input type="text" name="category" class="form-control">
	</div>
	
	<button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection