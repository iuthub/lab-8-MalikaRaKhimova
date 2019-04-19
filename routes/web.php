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

Route::get('/', ['uses' => 'PostController@getIndex', 'as' => 'blog.index']);

Route::get('post/{id}',['uses' => 'PostController@getPost', 'as' => 'blog.post']);

Route::group(['prefix' => 'admin'],function(){
	Route::get('',['uses' => 'PostController@getAdminIndex','as' => 'admin.index']);
	Route::get('create',['uses' => 'PostController@getAdminCreate', 'as' => 'admin.create']);
	Route::post('create',['uses' => 'PostController@postAdminCreate','as' => 'admin.create']);
	Route::get('edit/{id}',['uses' => 'PostController@getAdminEdit','as' =>  'admin.edit']);
	// Route::post('edit',['uses' => 'PostController@postAdminUpdate','as' => 'admin.update']);
	});

/*Route::get('admin/index', function(){
		return view('admin.index');
	});

	Route::get('admin/create', ['as' => 'admin.create', function(){
		return view('admin.create');
	}]);

	Route::get('admin/edit/{id}', ['as' => 'admin.edit', function(){
		return view('admin.edit');
}]);*/


Route::get('partials/admin-header', function(){
	return view('partials.admin_header'); 
});

Route::get('about', function(){
	return view('other.about'); 
});

/*Route::post(’create’,function(\Illuminate\Http\Request$request,\Illuminate\Validation\Factory $validator){
	$validation = $validator -> make($request -> all(),[’title’ => ’required|min:5’,
		’content’ => ’required|min :10’]);
    if($validation -> fails()) {
	return redirect() ->back () -> withErrors($validation);
		}
	return redirect() -> route(’admin.index’)-> with(’info’,’Post created,Title:’.$request -> input(’title’));}) -> name(’admin.create’);*/

