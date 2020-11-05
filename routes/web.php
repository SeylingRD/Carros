<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});
Route::get('/', function () {
    return view('vistas.principal');
});

Route::get('/marcas', function () {
    return view('vistas.marcas');
});

Route::get('/carros', function () {
    return view('vistas.carros');
});

Route::post('/marcas', function (HttpRequest $request) {
   
   
    $data=$request->nombre;
    $dataa = [
        'nombre' => $request->nombre,
        'request' => $request->all()
    ];
    
    return view('registro.addMarca',['result'=>$data]);
    
});

Route::post('/vehiculos', function (HttpRequest $request){
    $data=[
        'color'=>$request->color,
        'marca' =>$request ->marca,
        'placa' => $request ->placa,
        'chasis' => $request ->chasis,
        'dueño' => $request ->dueño 
    ]; 
        return view('registro.addMarca',['result'=>$data]);
    });
    



