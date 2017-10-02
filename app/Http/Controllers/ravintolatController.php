<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ravintolatController extends Controller
{

	public function printRestaurants() {

		$ravintolat = DB::table('ravintolat')->get();



		return view('welcome', compact('ravintolat'));

	}

	public function searchById($id)
	{

		$ravintola = DB::table('ravintolat')->find($id);

		dd($ravintola);

	}

	public function showAll()
	{
		
		$ravintolat = DB::table('ravintolat')->get();

		return $ravintolat;

	}
}


