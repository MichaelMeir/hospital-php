<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specie;
use App\Client;
use App\Patient;

class DeleteController extends Controller
{
    public function clients($id) {
    	Client::find($id)->delete();
    	return redirect(url('/clients'));
    }

    public function patients($id) {
    	Patient::find($id)->delete();
    	return redirect(url('/patients'));
    }

    public function species($id) {
    	Specie::find($id)->delete();
    	return redirect(url('/species'));
    }
}
