<?php
Route::get('login/{driver}','Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback','Auth\LoginController@handleProviderCallback');
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


Route::group(['prefix' => 'perfil'], function(){
	Route::get('/','ProfileController@index')->name('perfil.index')->middleware('auth');
	Route::get('/edit','ProfileController@edit')->name('perfil.edit')->middleware('auth');
	Route::put('/update/{id}','ProfileController@update')->name('perfil.update')->middleware('auth');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
	Route::get('/','HomeController@index')->name('admin.index');

	Route::group(['prefix' => 'cursos'], function(){
		Route::get('/edit/{id}','CourseController@edit')->name('admin.cursos.edit');
		Route::get('/','CourseController@index')->name('admin.cursos.index');
		Route::get('/create','CourseController@create')->name('admin.cursos.create');
		Route::post('/store','CourseController@store')->name('admin.cursos.store');
		Route::put('/update/{id}','CourseController@update')->name('admin.cursos.update');
		Route::resource('review','ReviewController');
		Route::put('/updateStatus/{id}','CourseController@updateStatus')->name('admin.cursos.updateStatus');
	});
	Route::resource('category','CategoryController');
	Route::resource('user','UserController');
	Route::resource('notification','CourseStudentController');
	Route::put('/notification/updateStatus/{id}','CourseStudentController@updateStatus')->name('notification.updateStatus');
	
});
Route::post('/review/store','ReviewController@store')->name('review.store');

Route::get('/instructor/{teacher}','TeacherController@show')->name('teacher.show');
Route::get('/pagos/{id}','PagosController@show')->name('pagos.show')->middleware('auth');