<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Articulos;

class ArticulosController extends Controller {

	//
	public function index()
	{
		$articulos = Articulos::all();
    	return view('paginas/articulos',compact('articulos'));    	
	}
	
	public function show($id)
	{
		/*$articulos = Articulos::find($id);
		return view('paginas/show',compact('articulos')); */
		return $id;
	}

	public function create()
	{
		return view('paginas/create');    	
	}

	public function store()
	{
		$input = Request::all();
		Articulos::create($input);
		return redirect ('articulos');
	}

}
