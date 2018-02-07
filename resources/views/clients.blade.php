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

	<h2>Clients</h2>

	<table>
		<tr>
			<td><a href="
				@if (\Request::is('*/client_firstname'))
					@if (\Request::is('*/desc/client_firstname'))
						@php echo url('clients/asc/client_firstname') @endphp
					@else
						@php echo url('clients/desc/client_firstname') @endphp
					@endif
				@else
					@php echo url('clients/asc/client_firstname') @endphp
				@endif
				">Firstname</a></td>
			<td><a href="
				@if (\Request::is('*/client_lastname'))
					@if (\Request::is('*/desc/client_lastname'))
						@php echo url('clients/asc/client_lastname') @endphp
					@else
						@php echo url('clients/desc/client_lastname') @endphp
					@endif
				@else
					@php echo url('clients/asc/client_lastname') @endphp
				@endif
				">Lastname</a></td>
			<td><a href="
				@if (\Request::is('*/client_phone'))
					@if (\Request::is('*/desc/client_phone'))
						@php echo url('clients/asc/client_phone') @endphp
					@else
						@php echo url('clients/desc/client_phone') @endphp
					@endif
				@else
					@php echo url('clients/asc/client_phone') @endphp
				@endif
				">Phone</a></td>
			<td><a href="
				@if (\Request::is('*/client_email'))
					@if (\Request::is('*/desc/client_email'))
						@php echo url('clients/asc/client_email') @endphp
					@else
						@php echo url('clients/desc/client_email') @endphp
					@endif
				@else
					@php echo url('clients/asc/client_email') @endphp
				@endif
				">Email</td>
			<td>Actions</td>
		</tr>

		@foreach ($clients as $client)
		<tr>
			
			<td>{{ $client->client_firstname }}</td>
			<td>{{ $client->client_lastname }}</td>
			<td>{{ $client->client_phone }}</td>
			<td>{{ $client->client_email }}</td>
			<td>
				<a href="edit/clients/{{ $client->client_id }}">edit</a>
				<a href="delete/clients/{{ $client->client_id }}">delete</a>
			</td>

		</tr>
		@endforeach

	</table>

	<p>
		<a href="create/clients">Create</a>
	</p>
	
	<p>
		<a href="index">home</a>
	</p>

</body>
</html>