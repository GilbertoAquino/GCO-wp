<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',function(){
    $cars = DB::table('index_carrusel')->get();
    $cirugiasquery = DB::table('index_cirugias')->get();
    $padquery = DB::table('index_padecimientos')->get();
    $serviciosquery = DB::table('index_servicios')->get();
    $equipoquery = DB::table('index_equipo')->get();
    $alert = "";
    $url = "";
    return view('index/index2',['url' => $url,'alert' => $alert, 'cars' => $cars,'cirugiasquery' => $cirugiasquery, 'padquery' => $padquery,'serviciosquery' => $serviciosquery, 'equipoquery' => $equipoquery]);
});
Route::post('/', function (Request $request) {
    $cars = DB::table('index_carrusel')->get();
    $cirugiasquery = DB::table('index_cirugias')->get();
    $padquery = DB::table('index_padecimientos')->get();
    $serviciosquery = DB::table('index_servicios')->get();
    $equipoquery = DB::table('index_equipo')->get();
    $alert = FALSE;
    $url = "";
    return view('index/index2',['url' => $url,'alert' => $alert, 'cars' => $cars,'cirugiasquery' => $cirugiasquery, 'padquery' => $padquery,'serviciosquery' => $serviciosquery, 'equipoquery' => $equipoquery]);
});

Route::get('/{modal}',function($modal){
    $cars = DB::table('index_carrusel')->get();
    $cirugiasquery = DB::table('index_cirugias')->get();
    $padquery = DB::table('index_padecimientos')->get();
    $serviciosquery = DB::table('index_servicios')->get();
    $equipoquery = DB::table('index_equipo')->get();
    $alert = "";
    $url = $modal;
    return view('index/index2',['url' => $url,'alert' => $alert, 'cars' => $cars,'cirugiasquery' => $cirugiasquery, 'padquery' => $padquery,'serviciosquery' => $serviciosquery, 'equipoquery' => $equipoquery]);
});

Route::get('cirugias/{modal}',function ($modal){
    $cirugia = DB::table('index_cirugias')->where('url',$modal)->first();
    $tc = "Conoce nuestras cirugias";
    $cirugiasquery = DB::table('index_cirugias')->get();
    $padquery = DB::table('index_padecimientos')->get();
    $dinamicurl = "cirugias";
    return view('index/article',['dinamicurl'=>$dinamicurl,'tc'=>$tc,'cirugia'=>$cirugia,'cirugiasquery' => $cirugiasquery, 'padquery' => $padquery]);
});

Route::get('cirugias/cirugias/{modal}',function ($modal){
    return redirect("cirugias/$modal");
});

Route::get('padecimientos/{modal}',function ($modal){
    $cirugia = DB::table('index_padecimientos')->where('url',$modal)->first();
    $tc = "Conoce nuestras cirugias";
    $cirugiasquery = DB::table('index_cirugias')->get();
    $padquery = DB::table('index_padecimientos')->get();
    $dinamicurl = "padecimientos";
    return view('index/article',['dinamicurl'=>$dinamicurl,'tc'=>$tc,'cirugia'=>$cirugia,'cirugiasquery' => $cirugiasquery, 'padquery' => $padquery]);
});

Route::get('padecimientos/padecimientos/{modal}',function ($modal){
    return redirect("padecimientos/$modal");
});

Route::get('padecimientos/cirugias/{modal}',function ($modal){
    return redirect("cirugias/$modal");
});
Route::get('cirugias/padecimientos/{modal}',function ($modal){
    return redirect("padecimientos/$modal");
});