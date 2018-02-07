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
		<input type="text" name="firstname" value="{{ $client->client_firstname }}">
		<input type="text" name="lastname" value="{{ $client->client_lastname }}">
		<input type="number" name="phone" value="{{ $client->client_phone }}">
		<input type="email" name="email" value="{{ $client->client_email }}">
		<input type="submit">
	</form>
	
</body>
</html>