<?php
use App\Http\Controllers\inicio_controler
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<!doctype html><html lang="es"><meta charset="utf-8"><title>Hola mundo</title><body><h1>¡Hola mundo!</h1></body></html>';
});

Route::get('/productos', function () {
    return 'productos 123';
});

Route :: get('/holamundo', function(){
    //llamar al controlador 
}); 

Route :: ('/holamundo',[inicio_controler :: class,'index']);
    


?>