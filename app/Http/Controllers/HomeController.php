<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuario;

class HomeController extends Controller
{


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('guest');
	}

	public function index($id){
        $user = Usuario::findOrFail($id);
        return view('home.home',['user' => $user]);
	}

    public function config(){
        return view('construction');
    }

}
