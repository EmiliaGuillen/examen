<?php
	    get('/',function(){
			return view('website.index2');
		});
		
		get('/user', function(){
			return Usuario::all();
		});

		get('/registro',function(){
			return view('website.registro');
		});

		get('/registromas',function(){
			return view('website.registro-mascotas');
		});

		get('/controller', 'UsuariosController@index');

		post('/form', 'UsuariosController@store');

		

		get('/admin',function(){
			return view('website.admin');
		});
		
		get('/users', function (){
			return App\User::all();
		});

get('/acceder', 'LoginController@index');
post('/login', 'LoginController@store');
get('/administrador/panel', 'AdministradorController@index');

// rutas del administrador
Route::group(['middleware' => 'admin'], function () {
	get('/administrador', 'AdministradorController@index');
	get('/logout', 'AdministradorController@logout');
	get('/administrador/libros', 'LibrosController@index');
	post('/formas', 'MascotasController@store');
});