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

	<h2>Patients</h2>

	<table>
		<tr>
			<td><a href="
				@if (\Request::is('*/patient_name'))
					@if (\Request::is('*/desc/patient_name'))
						@php echo url('patients/asc/patient_name') @endphp
					@else
						@php echo url('patients/desc/patient_name') @endphp
					@endif
				@else
					@php echo url('patients/asc/patient_name') @endphp
				@endif
				">Name</a></td>
			<td><a href="
				@if (\Request::is('*/species_id'))
					@if (\Request::is('*/desc/species_id'))
						@php echo url('patients/asc/species_id') @endphp
					@else
						@php echo url('patients/desc/species_id') @endphp
					@endif
				@else
					@php echo url('patients/asc/species_id') @endphp
				@endif
				">Species</a></td>
			<td><a href="
				@if (\Request::is('*/patient_status'))
					@if (\Request::is('*/desc/patient_status'))
						@php echo url('patients/asc/patient_status') @endphp
					@else
						@php echo url('patients/desc/patient_status') @endphp
					@endif
				@else
					@php echo url('patients/asc/patient_status') @endphp
				@endif
				">Status</a></td>
			<td><a href="
				@if (\Request::is('*/client_id'))
					@if (\Request::is('*/desc/client_id'))
						@php echo url('patients/asc/client_id') @endphp
					@else
						@php echo url('patients/desc/client_id') @endphp
					@endif
				@else
					@php echo url('patients/asc/client_id') @endphp
				@endif
				">Client</a></td>
			<td><a href="
				@if (\Request::is('*/gender'))
					@if (\Request::is('*/desc/gender'))
						@php echo url('patients/asc/gender') @endphp
					@else
						@php echo url('patients/desc/gender') @endphp
					@endif
				@else
					@php echo url('patients/asc/gender') @endphp
				@endif
				">Gender</a></td>
			<td>Actions</td>
		</tr>

		@foreach ($patients as $patient)
		<tr>
			
			<td>{{ $patient->patient_name }}</td>

			@foreach ($species as $specie)
				@if ($specie->species_id == $patient->species_id)
					
					<td>{{ $specie->species_description }}</td>

				@endif
			@endforeach

			<td>{{ $patient->patient_status }}</td>

			@foreach ($clients as $client)
				@if ($client->client_id == $patient->client_id)
					
					<td>{{ $client->client_firstname }}</td>

				@endif
			@endforeach

			<td>{{ $patient->gender }}</td>

			<td>
				<a href="@php echo url('edit/patients') @endphp{{ $patient->patient_id }}">edit</a>
				<a href="@php echo url('delete/patients') @endphp{{ $patient->patient_id }}">delete</a>
			</td>

		</tr>
		@endforeach

	</table>

	<p>
		<a href="create/patients">Create</a>
	</p>
	
	<p>
		<a href="index">home</a>
	</p>

</body>
</html>