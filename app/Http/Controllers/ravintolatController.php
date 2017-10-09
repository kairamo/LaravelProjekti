<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ravintola;

class ravintolatController extends Controller
{


	public function showByCity()
	{


		// dd(request('kaupunki'));
/*
        $ravintola = DB::table('ravintolat')->where('kaupunki', request('kaupunki'))->get();

		return view('show', compact('ravintola'));
*/

		$ravintolat = DB::table('ravintolat')->get();
		dd($ravintolat);

		// return view('show', compact('ravintolat'));
		
	}

	public function addToTable() {

		$ravintolaArvostelu = new Ravintola;

		$ravintolaArvostelu->ravintola = request('ravintola');

		$ravintolaArvostelu->kaupunki = request('kaupunki');

		$ravintolaArvostelu->osoite = request('osoite');

		$ravintolaArvostelu->url = request('url');

		$ravintolaArvostelu->tahdet = request('tahdet');

		$ravintolaArvostelu->tahdetlkm += 1;		

		$ravintolaArvostelu->save();

		return redirect('/');
	}

	public function findFromTable()
	{
		return view('welcome', "<h1>MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</h1>");
	}

	public function index()
	{
		return view('welcome');
		
	}

	public function printRestaurants() { // 


		#$ravintolat = DB::table('ravintolat')->get();
        $ravintolat = DB::table('ravintolat')
                                            ->where('ravintola', request('kaupunki'))
                                            ->orWhere('kaupunki', request('kaupunki'))
                                            ->get();





		return view('show', compact('ravintolat'));

	}

	public function searchById($id)
	{

		$ravintola = DB::table('ravintolat')->find($id);

		return $ravintola;

	}

    public function searchByName($ravintola)
    {

        $ravintola = DB::table('ravintolat')->where('ravintola', $ravintola)->get();

        return $ravintola;

    }

    public function searchByLocation($paikka)
    {

        $paikka = DB::table('ravintolat')->where('kaupunki', $paikka)->get();

        return $paikka;

    }

	public function showAll()
	{
		
		$ravintolat = DB::table('ravintolat')->get();

		return $ravintolat;

	}
}


