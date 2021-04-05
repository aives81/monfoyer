<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $marques = \App\Marques::all();
    return view('welcome')->with(['marques' => $marques]);
});

Route::get('/Nos-fournisseurs', function () {
    return view('listings');
});

Route::get('/A-propos-de-nous', function () {
    return view('about');
})

;Route::get('/Faqs', function () {
    return view('faq');
});

Route::get('/Se-connecter', function () {
    return view('cpanel.login');
});

Route::get('/Rejoignez-nous/{id?}','userController@create');
Route::post('/enregistrerUser','userController@store');

Route::get('/Contactez-nous', function () {
    return view('contact');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/////////////////////////////////////////////////////////////
/*Dashboard route*/
////////////////////////////////////////////////////////////
Route::get('/Mon-profil', 'profileController@index');

Route::get('/Ajouter-entrepot', 'entrepotController@create');

Route::post('/enregistrerEntrepot', 'entrepotController@store');

Route::get('/Mes-entrepots', 'entrepotController@entrepriseUser');

Route::get('/Mon-Entrepot/{entId}', 'entrepotController@show');

Route::post('/UpdateJourOuv', 'entrepotController@update');

Route::post('/addProdForEnt', 'possederController@store');

Route::post('/updateProdEnt', 'possederController@update');

Route::delete('/deleteProdEnt/{prodId}', 'possederController@destroy')->name('prod.destroy');

Route::get('/Mes-commandes', function () {
    return view('cpanel.allOrders');
});

Route::get('/Admin/Ajouter-produits', 'adminController@getPageOfAddProd');

Route::post('/addProdByAdmin', 'adminController@addProd');

///////////////////////////////////////////////

Route::get('/form-basic', function () {
    return view('cpanel.form-basic');
});
Route::get('/advanced-components', function () {
    return view('cpanel.advanced-components');
});
Route::get('/form-wizard', function () {
    return view('form-wizard');
});
Route::get('/html5-editor', function () {
    return view('html5-editor');
});
Route::get('/form-pickers', function () {
    return view('cpanel.form-pickers');
});
Route::get('/image-cropper', function () {
    return view('image-cropper');
});
Route::get('/image-dropzone', function () {
    return view('image-dropzone');
});
Route::get('/basic-table', function () {
    return view('cpanel.basic-table');
});
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/ui-buttons', function () {
    return view('ui-buttons');
});
Route::get('/ui-cards', function () {
    return view('cpanel.ui-cards');
});
Route::get('/ui-cards-hover', function () {
    return view('cpanel.ui-cards-hover');
});
Route::get('/ui-modals', function () {
    return view('cpanel.ui-modals');
});
Route::get('/ui-tabs', function () {
    return view('ui-tabs');
});
Route::get('/ui-tooltip-popover', function () {
    return view('ui-tooltip-popover');
});
Route::get('/ui-sweet-alert', function () {
    return view('ui-sweet-alert');
});
Route::get('/ui-notification', function () {
    return view('cpanel.ui-notification');
});
Route::get('/ui-timeline', function () {
    return view('ui-timeline');
});
Route::get('/ui-progressbar', function () {
    return view('ui-progressbar');
});
Route::get('/ui-typography', function () {
    return view('ui-typography');
});
Route::get('/ui-list-group', function () {
    return view('ui-list-group');
});
Route::get('/ui-range-slider', function () {
    return view('ui-range-slider');
});
Route::get('/ui-carousel', function () {
    return view('ui-carousel');
});
Route::get('/font-awesome', function () {
    return view('font-awesome');
});
Route::get('/foundation', function () {
    return view('foundation');
});
Route::get('/ionicons', function () {
    return view('ionicons');
});
Route::get('/themify', function () {
    return view('themify');
});
Route::get('/custom-icon', function () {
    return view('custom-icon');
});
Route::get('/highchart', function () {
    return view('highchart');
});
Route::get('/knob-chart', function () {
    return view('knob-chart');
});
Route::get('/jvectormap', function () {
    return view('jvectormap');
});
Route::get('/apexcharts', function () {
    return view('apexcharts');
});
Route::get('/video-player', function () {
    return view('video-player');
});
Route::get('/forgot-password', function () {
    return view('cpanel.forgot-password');
});
Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/400', function () {
    return view('400');
});
Route::get('/403', function () {
    return view('403');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/500', function () {
    return view('500');
});
Route::get('/503', function () {
    return view('503');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/contact-directory', function () {
    return view('contact-directory');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/pricing-table', function () {
    return view('pricing-table');
});
Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/introduction', function () {
    return view('introduction');
});
Route::get('/getting-started', function () {
    return view('getting-started');
});
Route::get('/color-settings', function () {
    return view('color-settings');
});
Route::get('/third-party-plugins', function () {
    return view('third-party-plugins');
});
Route::get('/welcome2', function () {
    return view('welcome2');
});
