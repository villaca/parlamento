<?php
/**
 * Created by PhpStorm.
 * User: DanileVS
 * Date: 29/06/2015
 * Time: 18:34
 */

namespace App\Http\Controllers;


use App\Tema;

class TemaController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }


    public function index(){
        $temas = Tema::all();

        return view('temas.listar',['temas' => $temas]);
    }
}