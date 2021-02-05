<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
    	return 'Usuarios';
    }

    public function mostrarDetalles($id)
    {
    	return "Mostrando datos del usuario: {$id}";
    }
}
