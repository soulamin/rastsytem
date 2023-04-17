<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index(){
        $usuarios = Usuario::all();
        return view("usuario.index",compact('usuarios'));
    }
    function login(){

    }

    function cadastro(){
        return view("usuario.add");
    }

}
