<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function index() {
        $name = 'Raul';
        $habitos = [
            'Ler',
            'Escrever',
            'Correr',
            'Programar'
        ];

        return view('home', [
            'name' => $name,
            'habitos' => $habitos
        ]);
    }
}
