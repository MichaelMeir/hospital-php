<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Patient;
use App\Specie;

class HospitalController extends Controller
{
    
	public function index() {

		$clients = Client::all();
		$patients = Patient::all();
		$species = Specie::all();

		return view('index', compact('clients', 'patients', 'species'));
	}

	public function clients() {

		$clients = Client::all();

		return view('clients', compact('clients'));
	}

	public function species() {

		$species = Specie::all();

		return view('species', compact('species'));

	}

	public function index_sort($sort, $sort_name) {

		$clients = Client::all();
		$patients = Patient::orderBy($sort_name, $sort)->get();
		$species = Specie::all();

		return view('index', compact('clients', 'patients', 'species', '$sort', '$sort_name'));
	}

	public function clients_sort($sort, $sort_name) {

		$clients = Client::orderBy($sort_name, $sort)->get();

		return view('clients', compact('clients', '$sort', '$sort_name'));
	}

	public function species_sort($sort, $sort_name) {

		$species = Specie::orderBy($sort_name, $sort)->get();

		return view('species', compact('species', '$sort', '$sort_name'));

	}

}
