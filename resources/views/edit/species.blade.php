<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Specie</title>
</head>
<body>

	@if ($errors->any()) 

		<ul>
			@foreach($errors->all() as $error)
			
			<li> {{ $error }}</li>

			@endforeach
		</ul>

	@endif

	<form action="" method="POST">
		{{ csrf_field() }}
		<input type="text" name="description" value="{{ $specie->species_description }}">
		<input type="submit">
	</form>
	
</body>
</html>