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
		<input type="text" name="name" placeholder="name">

		<select name="specie">
		@foreach ($species as $specie)
			<option value="{{ $specie->species_id }}">
				{{ $specie->species_description }}
			</option>
		@endforeach
		</select>

		<input type="text" name="status" placeholder="status">

		<select name="client">
		@foreach ($clients as $client)
			<option value="{{ $client->client_id }}">
				{{ $client->client_firstname }} {{ $client->client_lastname }}
			</option>
		@endforeach
		</select>

		<input type="radio" name="gender" value="male">Male</input>
		<input type="radio" name="gender" value="female">Female</input>

		<input type="submit">
	</form>
	
</body>
</html>