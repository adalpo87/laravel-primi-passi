<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
       
    $data = [
        'welcome' => 'Hello World'
    ];
    return view('home', $data);
});
Route::get('/classea', function () {

    $data = [
        'welcome' => 'Hello World',
        'lista' => [
            'studente1' => 
            [
                'nome' => 'Gianni',
                'cognome'=> 'Bianchi',
                'Classe' => 'A'
            ],
            'studente2'=>
            [
                'nome' => 'Mario',
                'cognome'=> 'Rossi',
                'Classe' => 'B'
            ],
            'studente3'=>
            [
                'nome' => 'Stefano',
                'cognome'=> 'Verdi',
                'Classe' => 'A'
            ],
            'studente4'=>
            [
                'nome' => 'Ugo',
                'cognome'=> 'DeUghi',
                'Classe' => 'A'
            ],
            'studente5'=>
            [
                'nome' => 'Mirco',
                'cognome'=> 'Battaglia',
                'Classe' => 'B'
            ],
            'studente6'=>
            [
                'nome' => 'Alessandro',
                'cognome'=> 'Biondi',
                'Classe' => 'A'
            ]
        ]
         ];

    return view('classea', $data);
});

Route::get('/classeb', function () {

    $data = [
        'welcome' => 'Hello World',
        'lista' => [
            'studente1' => 
            [
                'nome' => 'Gianni',
                'cognome'=> 'Bianchi',
                'Classe' => 'A'
            ],
            'studente2'=>
            [
                'nome' => 'Mario',
                'cognome'=> 'Rossi',
                'Classe' => 'B'
            ],
            'studente3'=>
            [
                'nome' => 'Stefano',
                'cognome'=> 'Verdi',
                'Classe' => 'A'
            ],
            'studente4'=>
            [
                'nome' => 'Ugo',
                'cognome'=> 'DeUghi',
                'Classe' => 'A'
            ],
            'studente5'=>
            [
                'nome' => 'Mirco',
                'cognome'=> 'Battaglia',
                'Classe' => 'B'
            ],
            'studente6'=>
            [
                'nome' => 'Alessandro',
                'cognome'=> 'Biondi',
                'Classe' => 'A'
            ]
        ]
         ];

    return view('classeb', $data);
});