<?php
        Route::get('/',function() { return view('index'); });
		  Route::resource('/author', 'AutoresController');
		  Route::get('/author/(:number)/delete','AutoresController@destroy');
		Route::resource('/book', 'BookController');
		Route::get('/book/(:number)/delete','BookController@destroy');
		Route::get('/','BookController@index');
    	Route::resource('/editorial','EditorialesController');
		Route::get('/editorial/(:number)/delete','EditorialesController@destroy');
  Route::dispatch();
?>
