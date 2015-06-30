<?php
/**
 * Created by PhpStorm.
 * User: DanileVS
 * Date: 29/06/2015
 * Time: 18:36
 */

namespace App\Http\Controllers;


class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){

        return view('login');
    }

}