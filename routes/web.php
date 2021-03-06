<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'app'],function(){

	Route::group(['middleware' => 'rbac'],function(){
		Route::get('roles',[
			'uses' => 'RoleController@index',
			'as' => 'roles.index',
		]);
		Route::get('dashboard', [
			'uses' => 'DashboardController@index',
			'as' => 'dashboard.index',
		]);	

		Route::get('users',[
			'uses' =>  'UserController@index',
			'as' => 'users.index'
		]);

		Route::get('user/add',[
			'uses' => 'UserController@add',
			'as' => 'user.add',
		]);

		Route::post('user/create',[
			'uses' => 'UserController@create',
			'as' => 'user.create'
		]);

		Route::get('user/{user}/edit', [
				'uses' => 'UserController@edit',
				'as' => 'user.edit',
			]);
		Route::post('user/{user}/update', [
				'uses' => 'UserController@update',
				'as' => 'user.update',
			]);
		
		Route::get('user/{user}/delete', [
				'uses' => 'UserController@delete',
				'as' => 'user.delete',
			]);

		Route::post('user/updatephoto',[
			'uses' => 'UserController@updatePhoto',
			'as' => 'user.updatephoto'
		]);
		Route::get('user/{username}',[
			'uses' => 'UserController@profile',
			'as' => 'user.profile'
		]);

		Route::get('myprofile', [
				'uses' => 'ProfileController@my',
				'as' => 'my.profile',
			]);

		Route::get('myprofile/edit', [
				'uses' => 'ProfileController@edit',
				'as' => 'myprofile.edit',
			]);

		Route::post('myprofile/update', [
				'uses' => 'ProfileController@update',
				'as' => 'myprofile.update',
			]);

		Route::post('myprofile/changepicture', [
				'uses' => 'ProfileController@changepicture',
				'as' => 'myprofile.change.picture',
			]);

		Route::get('role/add',[
			'uses' => 'RoleController@add',
			'as' => 'role.add',
		]);

		Route::post('role/create',[
			'uses' => 'RoleController@create',
			'as' => 'role.create',
		]);
		Route::get('role/{id}/edit',[
			'uses' => 'RoleController@edit',
			'as' => 'role.edit'
		]);

		Route::post('role/{id}/update',[
			'uses' => 'RoleController@update',
			'as' => 'role.update'
		]);

		Route::get('role/{id}/delete',[
			'uses' => 'RoleController@delete',
			'as' => 'role.delete'
		]);	

		Route::get('permissions',[
			'uses' => 'PermissionController@index',
			'as' => 'permissions.index'
		]);

		Route::get('permission/add',[
			'uses' => 'PermissionController@add',
			'as' => 'permission.add'
		]);

		Route::post('permission/create',[
			'uses' => 'PermissionController@create',
			'as' => 'permission.create',
		]);

		Route::get('/permission/{id}/edit',[
			'uses' => 'PermissionController@edit',
			'as' => 'permission.edit',
		]);

		Route::post('permission/{permission}/update',[
			'uses' => 'PermissionController@update',
			'as' => 'permission.update',
		]);

		Route::get('permission/{id}/delete',[
			'uses' => 'PermissionController@delete',
			'as' => 'permission.delete',
		]);

		Route::get('aplikan', [
			'uses' => 'AplikanController@index',
			'as' => 'aplikan.index',
		]);
		Route::get('aplikan/add', [
				'uses' => 'AplikanController@add',
				'as' => 'aplikan.add',
			]);

		Route::post('aplikan/add', [
				'uses' => 'AplikanController@postadd',
				'as' => 'post.aplikan.add',
			]);

		Route::get('aplikan/{aplikan}/edit', [
				'uses' => 'AplikanController@edit',
				'as' => 'aplikan.edit',
			]);

		Route::post('aplikan/{aplikan}/update', [
				'uses' => 'AplikanController@update',
				'as' => 'aplikan.update',
			]);

		Route::get('aplikan/saya', [
			'uses' => 'AplikanController@saya',
			'as' => 'aplikan.saya',
		]);

		Route::post('aplikan/saya/import', [
				'uses' => 'AplikanController@sayaImport',
				'as' => 'aplikan.saya.import',
			]);

		Route::post('aplikan/saya/import/konfirmasi', [
				'uses' => 'AplikanController@sayaImportKonfirmasi',
				'as' => 'aplikan.saya.import.konfirmasi',
			]);

		Route::post('ajax/aplikan/take', [
			'uses' => 'AplikanController@ajaxtake',
			'as' => 'ajax.aplikan.take',
		]);

		Route::post('ajax/aplikan/givento', [
				'uses' => 'AplikanController@ajaxGivenTo',
				'as' => 'ajax.aplikan.givento',
			]);

		Route::post('ajax/aplikan/release', [
			'uses' => 'AplikanController@ajaxrelease',
			'as' => 'ajax.aplikan.release',
		]);

		Route::get('aplikan/referensisaya', [
				'uses' => 'AplikanController@referensisaya',
				'as' => 'aplikan.referensi.saya',
			]);

		Route::group(['middleware' => 'can-manage-aplikan'],function(){
			Route::get('aplikan/{aplikan}/view', [
				'uses' => 'AplikanController@view',
				'as' => 'aplikan.view',
			]);

			Route::get('aplikan/{aplikan}/detail', [
					'uses' => 'AplikanController@detail',
					'as' => 'aplikan.detail',
				]);

			Route::post('aplikan/daftarkan', [
				'uses' => 'AplikanController@daftarkan',
				'as' => 'post.aplikan.daftarkan',
			]);

			Route::post('aplikan/registrasikan', [
				'uses' => 'AplikanController@registrasikan',
				'as' => 'post.aplikan.registrasikan',
			]);

			Route::get('aplikan/{aplikan}/registrasikan', [
				'uses' => 'AplikanController@registrasikan',
				'as' => 'aplikan.registrasikan',
			]);
			Route::post('aplikan/followedup/', [
				'uses' => 'AplikanController@postfollowedup',
				'as' => 'post.aplikan.followedup',
			]);
			Route::post('user/melayani/aplikan', [
				'uses' => 'UserController@postmelayaniaplikan',
				'as' => 'post.user.melayani.aplikan',
			]);
		});
		

		Route::get('aplikan/all', [
				'uses' => 'AplikanController@all',
				'as' => 'aplikan.all',
			]);
		
		
		Route::get('settingspt', [
				'uses' => 'SettingPtController@general',
				'as' => 'settingspt.general',
			]);

		Route::post('settingspt', [
				'uses' => 'SettingPtController@update',
				'as' => 'post.settingspt.update',
			]);
		Route::get('settingspt/prodi', [
				'uses' => 'SettingPtController@prodi',
				'as' => 'settingspt.prodi',
			]);

		Route::get('setting/kampus', [
				'uses' => 'SettingKampusController@general',
				'as' => 'settings.kampus.general',
			]);

		Route::get('setting/kampus/jurusan', [
				'uses' => 'SettingKampusController@jurusan',
				'as' => 'settings.kampus.jurusan',
			]);

		Route::get('setting/kampus/pembayaran', [
				'uses' => 'SettingKampusController@pembayaran',
				'as' => 'settings.kampus.pembayaran',
			]);

		Route::post('setting/kampus/update', [
				'uses' => 'SettingKampusController@update',
				'as' => 'post.settings.kampus.update',
			]);
		Route::get('tagihan', [
				'uses' => 'TagihanController@index',
				'as' => 'tagihan.index',
			]);
		Route::post('tagihan/bayar', [
				'uses' => 'TagihanController@bayar',
				'as' => 'post.bayar.tagihan',
			]);
		Route::get('reports', [
				'uses' => 'ReportController@index',
				'as' => 'report.index',
			]);
		Route::get('posts',[
			'uses' => 'PostController@index',
			'as' => 'posts.index',
		]);

		Route::get('post/add',[
			'uses' => 'PostController@add',
			'as' => 'post.add',
		]);

		Route::post('post/create',[
			'uses' => 'PostController@create',
			'as' => 'post.create',
		]);

		Route::get('post/{id}/delete',[
			'uses' => 'PostController@delete',
			'as' => 'post.delete',
		]);

		Route::get('post/{post}/edit',[
			'uses' => 'PostController@edit',
			'as' => 'post.edit',
		]);

		Route::post('post/{post}/update',[
			'uses' => 'PostController@update',
			'as' => 'post.update',
		]);

		Route::get('pages', [
				'uses' => 'StaticPageController@index',
				'as' => 'static.pages.index',
			]);

		Route::get('pages/add', [
				'uses' => 'StaticPageController@add',
				'as' => 'static.page.add',
			]);
		Route::post('pages/create', [
				'uses' => 'StaticPageController@create',
				'as' => 'static.page.create',
			]);
		Route::get('page/{post}/edit', [
				'uses' => 'StaticPageController@edit',
				'as' => 'static.page.edit',
			]);
		Route::get('page/{post}/delete', [
				'uses' => 'StaticPageController@delete',
				'as' => 'static.page.delete',
			]);

		Route::post('page/{post}/update', [
				'uses' => 'StaticPageController@update',
				'as' => 'static.page.update',
			]);

		Route::get('theme/option/general', [
				'uses' => 'ThemeSettingController@general',
				'as' => 'theme.options.general',
			]);

		Route::get('theme/option/slider', [
				'uses' => 'ThemeSettingController@slider',
				'as' => 'theme.options.slider',
			]);

		Route::get('theme/option/featuredprogram', [
				'uses' => 'ThemeSettingController@featuredprogram',
				'as' => 'theme.options.featuredprogram',
			]);

		Route::get('theme/option/sambutan', [
				'uses' => 'ThemeSettingController@sambutan',
				'as' => 'theme.options.sambutan',
			]);

		Route::post('theme/option/update', [
				'uses' => 'ThemeSettingController@update',
				'as' => 'theme.options.update',
			]);

		Route::get('menus', [
				'uses' => 'MenuController@index',
				'as' => 'menus.index',
			]);

		Route::get('setting/general', [
				'uses' => 'SettingController@general',
				'as' => 'setting.general',
			]);
		Route::get('setting/aplikan', [
				'uses' => 'SettingController@aplikan',
				'as' => 'setting.aplikan',
			]);

		Route::get('setting/akademik', [
				'uses' => 'SettingController@akademik',
				'as' => 'setting.akademik',
			]);
		Route::get('setting/mailing', [
				'uses' => 'SettingController@mailing',
				'as' => 'setting.mailing',
			]);

		Route::get('setting/database', [
				'uses' => 'SettingController@database',
				'as' => 'setting.database',
			]);

		Route::get('setting/database/reset', [
				'uses' => 'SettingController@databasereset',
				'as' => 'setting.database.reset',
			]);

		Route::post('setting/database/install', [
				'uses' => 'SettingController@databaseinstall',
				'as' => 'setting.database.install',
			]);
		
	});
	
	Route::group(['middleware' => 'refferal'],function(){
		Route::get('/', [
				'uses' => 'PagesController@index',
				'as' => 'page.index',
			]);


		Route::get('page/download/brosur', [
				'uses' => 'PagesController@downloadbrosur',
				'as' => 'page.download.brosur',
			]);

		Route::post('page/download/brosur', [
				'uses' => 'PagesController@postdownloadbrosur',
				'as' => 'post.page.download.brosur',
			]);

		Route::get('auth/error/401', [
				'uses' => 'AuthController@error401',
				'as' => 'auth.error401',
			]);

		Route::get('login',[
			'uses' => 'AuthController@login',
			'as' => 'auth.login',
			'middleware' => 'guest',
		]);

		Route::post('dologin',[
			'uses' => 'AuthController@dologin',
			'as' => 'auth.dologin',
		]);

		Route::get('logout',[
			'uses' => 'AuthController@logout',
			'as' => 'auth.logout',
		]);

		Route::get('searchWilayah',[
			'uses' => 'DashboardController@cariWilayah',
			'as' => 'search.wilayah',
		]);

		Route::get('downloadfileexcelimportaplikan', [
				'uses' => 'AplikanController@downloadfileexcelimportaplikan',
				'as' => 'download.contoh.file.import.aplikan',
			]);

		Route::get('/{slug}', [
				'uses' => 'PagesController@single',
				'as' => 'page.single',
			]);

		Route::get('kategori/{slug}', [
				'uses' => 'PagesController@category',
				'as' => 'page.category',
			]);
		// Route::post('thumbnail/upload',[
		// 	'uses' => 'PostController@ajaxUploadThumbnail',
		// 	'as' => 'ajax.upload.thumbnail',
		// ]);
		Route::get('tags/search',[
			'as' => 'tags.search',
			'uses' => 'TagsController@search'
		]);

		Route::post('category/addAjax',[
			'uses' => 'CategoryController@addAjax',
			'as' => 'category.addAjax',
		]);

		Route::post('thumbnail/upload',[
			'uses' => 'PostController@ajaxUploadThumbnail',
			'as' => 'ajax.upload.thumbnail',
		]);
	});
});
