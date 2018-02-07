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
		<input type="text" name="name" value="{{ $patient->patient_name }}">

		<select name="specie">
		@foreach ($species as $specie)
			<option value="{{ $specie->species_id }}"
			@if ($specie->species_id == $patient->species_id)
			selected="true"
			@endif
			>
				{{ $specie->species_description }}
			</option>
		@endforeach
		</select>

		<input type="text" name="status" value="{{ $patient->patient_status }}">

		<select name="client">
		@foreach ($clients as $client)
			<option value="{{ $client->client_id }}"
			@if ($client->client_id == $patient->client_id)
			selected="true"
			@endif
			>
				{{ $client->client_firstname }} {{ $client->client_lastname }}
			</option>
		@endforeach
		</select>

		<input type="radio" name="gender" value="male"
		@if ($patient->gender == 'male')
		checked="checked"
		@endif
		>Male</input>
		<input type="radio" name="gender" value="female"
		@if ($patient->gender == 'female')
		checked="checked"
		@endif
		>Female</input>

		<input type="submit">
	</form>
	
</body>
</html>