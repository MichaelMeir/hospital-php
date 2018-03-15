<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>
<body>
	
	<h1>Hospital</h1>

	<ul>
		<li><a href="@php echo url('clients') @endphp">Clients</a></li>
		<li><a href="@php echo url('patients') @endphp">Patients</a></li>
		<li><a href="@php echo url('species') @endphp">Species</a></li>
	</ul>

	<h2>Species</h2>

	<table>
		<tr>
			<td><a href="
				@if (\Request::is('*/species_id'))
					@if (\Request::is('*/desc/species_id'))
						@php echo url('species/asc/species_id') @endphp
					@else
						@php echo url('species/desc/species_id') @endphp
					@endif
				@else
					@php echo url('species/asc/species_id') @endphp
				@endif
				">#</a></td>
			<td><a href="
				@if (\Request::is('*/species_description'))
					@if (\Request::is('*/desc/species_description'))
						@php echo url('species/asc/species_description') @endphp
					@else
						@php echo url('species/desc/species_description') @endphp
					@endif
				@else
					@php echo url('species/asc/species_description') @endphp
				@endif
				">Description</a></td>
			<td>Actions</td>
		</tr>

		@foreach ($species as $specie)
		<tr>
			
			<td>{{ $specie->species_id }}</td>
			<td>{{ $specie->species_description }}</td>
			<td>
				<a href="@php echo url('edit/species') @endphp{{ $specie->species_id }}">edit</a>
				<a href="@php echo url('delete/species') @endphp{{ $specie->species_id }}">delete</a>
			</td>

		</tr>
		@endforeach

	</table>

	<p>
		<a href="create/species">Create</a>
	</p>
	
	<p>
		<a href="index">home</a>
	</p>

</body>
</html>