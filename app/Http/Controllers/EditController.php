<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specie;
use App\Client;
use App\Patient;

class EditController extends Controller
{
    
	public function species_view($id) {

		$specie = Specie::find($id);

		return view('edit.species', compact('specie'));
	}

	public function species(Request $request, $id) {

		$request->validate([
			'description' => 'required|min:3'
		]);

		$specie = Specie::find($id);
		$specie->species_description = $request->description;
		$specie->save();

		return redirect(url('/species'));
	}

	public function clients_view($id) {

		$client = Client::find($id);

		return view('edit.clients', compact('client'));
	}

	public function clients(Request $request, $id) {

		$request->validate([
			'firstname' => 'required|min:3',
			'lastname' => 'required|min:3',
			'phone' => 'required|numeric|min:8',
			'email' => 'required|email'
		]);

		$client = Client::find($id);
		$client->client_firstname = $request->firstname;
		$client->client_lastname = $request->lastname;
		$client->client_phone = $request->phone;
		$client->client_email = $request->email;
		$client->save();
		

		return redirect(url('/clients'));
	}

	public function patients_view($id) {

		$patient = Patient::find($id);

		$clients = Client::all();
		$species = Specie::all();

		return view('edit.patients', compact('patient', 'clients', 'species'));
	}

	public function patients(Request $request, $id) {

		$request->validate([
			'name' => 'required',
			'specie' => 'required',
			'status' => 'required',
			'client' => 'required',
			'gender' => 'required'
		]);

		$patient = Patient::find($id);
		$patient->patient_name = $request->name;
		$patient->species_id = $request->specie;
		$patient->patient_status = $request->status;
		$patient->client_id = $request->client;
		$patient->gender = $request->gender;
		$patient->save();

		return redirect(url('/patients'));
	}

}
