<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaginasControler extends Controller {

	//
	public function ayuda()
	{
		$nombre = 'Angelica';
		$apellido = 'Sandoval';
		return view('paginas/ayuda',compact('nombre','apellido'));
	}

	public function acerca()
	{
		return view('acerca');
	}
}
