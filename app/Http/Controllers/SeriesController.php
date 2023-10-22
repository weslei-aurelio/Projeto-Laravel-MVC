<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        return view('series.index')->with('series', $series);
    }

    public function create(){

        return view('series.create');
    }
}
/* 

    Parei na aula: Entendendo o conceito, Laravel Mix

    ao baixar o projeto, não esquecer de clonar o arquivo .env e gerar a chave de seguranca com o comando: php artisan key:generate

*/   