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
	Route::get('/{categoria}', 'CourseController@index')->name('cursos.index');
	Route::get('/{course}/inscripcion', 'CourseController@inscribe')->name('cursos.inscribe');
	Route::get('/mis-cursos-creados/{id}','CourseController@cursosPorMi')->name('cursos.show');
});

Route::post('/curso/{id}/pay','BuyController@store')->name('pay.store')->middleware('auth');
Route::get('/curso/{curso}', 'CourseController@show')->name('curso.show');
Route::get('/curso/{id}/comprar/','CourseController@process')->name('cursos.process')->middleware('auth');
Route::get('/mis-cursos/{id}','CourseController@misCursos')->name('cursos.misCursos')->middleware('auth');


Route::group(['prefix' => 'perfil', 'middleware' => 'auth'], function(){
	Route::get('/','ProfileController@index')->name('perfil.index');
	Route::get('/edit','ProfileController@edit')->name('perfil.edit');
	Route::put('/update/{id}','ProfileController@update')->name('perfil.update');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
	Route::get('/','HomeController@index')->name('admin.index');

	Route::group(['prefix' => 'cursos'], function(){
		Route::get('/','CourseController@index')->name('admin.cursos.index');
		Route::get('/create','CourseController@create')->name('admin.cursos.create');
	});
});