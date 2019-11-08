<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/storage/{path}/{attachment}', function($path, $attachment) {
	$file = sprintf('storage/%s/%s', $path, $attachment);
	if(File::exists($file)) {
		return Image::make($file)->response();
	}
});


Route::group(['prefix' => 'cursos'], function () {

	Route::get('/suscripcion', 'CourseController@subscribed')->name('cursos.subscribed');
	Route::get('/{categoria}', 'CourseController@index')->name('cursos.index');
	Route::get('/{course}/inscripcion', 'CourseController@inscribe')->name('cursos.inscribe');
	Route::get('/mis-cursos-creados/{id}','CourseController@cursosPorMi')->name('cursos.show');
});
Route::post('/curso/{id}/pay','BuyController@store')->name('pay.store');
Route::get('mis-suscripciones/{id}','SubscriptionController@show')->name('subscription.show');
Route::get('/curso/{curso}', 'CourseController@show')->name('curso.show');
Route::get('/curso/{id}/comprar/','CourseController@process')->name('cursos.process');
Route::get('/mis-cursos/{id}','CourseController@misCursos')->name('cursos.misCursos');


Route::group(['prefix' => 'perfil'], function(){
	Route::get('/','ProfileController@index')->name('perfil.index');
	Route::get('/edit','ProfileController@edit')->name('perfil.edit');
});

