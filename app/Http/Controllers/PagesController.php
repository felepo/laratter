<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $links = [
            'https://platzi.com/laravel' => 'Curso de laravel',
            'https://laravel.com' => 'Pagina de Laravel'
        ];
    
        return view('welcome', [
            'teacher' => 'Fernando Poncio',
            'links' => $links
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
