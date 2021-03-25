<?php

namespace App\Http\Controllers\ApiCrud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $despesas = [
            [
                'id' => 1,
                'nomeUsuario' => 'José Maria',
                'descricaoDespesa' => 'Curso Vue',
                'data' => '23-03-2021',
                'imagemAnexo' => 'url...',
                'custoDespesa' => '31',
            ]
        ];

        $usuarios = [
            [
                'id' => 1,
                'nomeUsuario' => 'José Maria',
                'senhaUsuario' => '123456'
            ]
        ];

        return response()->json([
            'despesas' => $despesas,
            'usuarios' => $usuarios,
        ]);
    }
}
