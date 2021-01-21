<?php




Route::get('contact/us','helloController@contact')->name('contact');
Route::get('about/us','helloController@about')->name('about');
Route::get('/','helloController@index')->name('home');


/*
//posts crud are here
Route::get('students','StudentController@create')->name('students');
Route::get('/','StudentController@index')->name('students.all');
Route::post('store.student','StudentController@store')->name('store.student');
Route::get('viewStudent/{id}','StudentController@show');
Route::get('deleteStudent/{id}','StudentController@destroy');
Route::get('editStudent/{id}','StudentController@edit');
Route::post('updateStudent/{id}','StudentController@update');*/



/*
Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');
Route::get('view/post/{id}','PostController@show');
Route::get('delete/post/{id}','PostController@DeletePost');
Route::get('edit/post/{id}','PostController@EditPost');
Route::post('update/post/{id}','PostController@UpdatePost');*/

route::resource('student','StudentController');

