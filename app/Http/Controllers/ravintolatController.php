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

    public function searchByName($ravintola)
    {

        $ravintola = DB::table('ravintolat')->where('ravintola', $ravintola)->get();

        dd($ravintola);

    }

    public function searchByLocation($paikka)
    {

        $paikka = DB::table('ravintolat')->where('kaupunki', $paikka)->get();

        dd($paikka);

    }

	public function showAll()
	{
		
		$ravintolat = DB::table('ravintolat')->get();

		return $ravintolat;

	}
}


