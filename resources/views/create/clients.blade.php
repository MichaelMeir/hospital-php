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
		<input type="text" name="firstname" placeholder="firstname">
		<input type="text" name="lastname" placeholder="lastname">
		<input type="number" name="phone" placeholder="phonenumber">
		<input type="email" name="email" placeholder="email">
		<input type="submit">
	</form>
	
</body>
</html>