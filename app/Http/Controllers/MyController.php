<?php namespace App\Http\Controllers;

use App\Prueba;

class MyController extends Controller {

	public function index()
	{	
		$modelo = new Prueba();

		$nombre = $modelo->saludar('Fredys');

		return view('prueba.index', array('saludo' => $nombre));
		//return view('prueba.index', ['saludo' => $nombre]);
	}

}

?>