<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/shoes', function (){
    $DATA = [
        ['id' => 0, 'name' => "Nike TN", 'price' => 150],
        ['id' => 1, 'name' => "New Balance", 'price' => 10],
        ['id' => 2, 'name' => "Tongs", 'price' => 3],
    ];
    return view('index' , ['lesChassures' => $DATA
    ]);
});


Route::get('/shoes(id)', function ($id){
    $DATA = [
        ['id' => 0, 'name' => "Nike TN", 'price' => 150],
        ['id' => 1, 'name' => "New Balance", 'price' => 10],
        ['id' => 2, 'name' => "Tongs", 'price' => 3],
    ];
    $maChaussure = $DATA[$id];
    return view('show', ['maChaussure' => $maChaussure]);

});
