<?php

namespace App\Http\Controllers\ApiCrud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Despesa;

class HomeController extends Controller
{
    public function index()
    {
        $despesas = Despesa::all();

        $usuarios = [
            [
                'id' => 1,
                'nomeUsuario' => 'José Maria',
                'senhaUsuario' => '123456'
            ],
            [
                'id' => 2,
                'nomeUsuario' => 'Luiza Freitas',
                'senhaUsuario' => 'Lu@Freitas'
            ],
        ];

        return response()->json([
            'despesas' => $despesas,
            'usuarios' => $usuarios,
        ]);
    }
}
