<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specie;
use App\Client;
use App\Patient;

class CreateController extends Controller
{
	public function species_view() {
		return view('create.species');
	}

	public function species(Request $request) {

		$request->validate([
			'description' => 'required|min:3'
		]);

		$specie = new Specie;
		$specie->species_description = $request->description;
		$specie->save();

		return redirect(url('/species'));
	}

	public function clients_view() {
		return view('create.clients');
	}

	public function clients(Request $request) {

		$request->validate([
			'firstname' => 'required|min:3',
			'lastname' => 'required|min:3',
			'phone' => 'required|numeric|min:8',
			'email' => 'required|email'
		]);

		$client = new Client;
		$client->client_firstname = $request->firstname;
		$client->client_lastname = $request->lastname;
		$client->client_phone = $request->phone;
		$client->client_email = $request->email;
		$client->save();
		

		return redirect(url('/clients'));
	}

	public function patients_view() {

		$clients = Client::all();
		$species = Specie::all();

		return view('create.patients', compact('clients', 'species'));
	}

	public function patients(Request $request) {

		$request->validate([
			'name' => 'required',
			'specie' => 'required',
			'status' => 'required',
			'client' => 'required',
			'gender' => 'required'
		]);

		$patient = new Patient;
		$patient->patient_name = $request->name;
		$patient->species_id = $request->specie;
		$patient->patient_status = $request->status;
		$patient->client_id = $request->client;
		$patient->gender = $request->gender;
		$patient->save();

		return redirect(url('/patients'));
	}
}
