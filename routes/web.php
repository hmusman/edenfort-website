<?php


Route::get('/','Pages\homeController@index')->name('home');


Route::get('projects','Pages\projectController@index');
Route::get('/project{id}','Pages\projectController@singleProject');
//View all properties of specific agent, from single proerty page
Route::get('agentPropertiesFilter','Pages\searchController@agentPropertiesFilter');


Route::get('/property{id}','Pages\searchController@singleProperty');

//always use this form route before the index route other wise form will not work
Route::get('agentFilter','Pages\agentsController@index')->name('agentFilter');
Route::get('agents','Pages\agentsController@index');
//single Agent Page
Route::get('/agent{id}','Pages\agentsController@singleAgent');
//Route::get('singleAgent','Pages\agentsController@singleAgent');
//agentFilter

// Route::get('index', function(){
// 	 return view('Pages.index');
// });
Route::get('aboutUs','Pages\aboutUsController@index');

//filter index page
Route::get('FilterIndex','Pages\searchController@homePage')->name('FilterIndex');

//Menu wise search
Route::get('menuFilter','Pages\searchController@menuSearch');

//home page footer filter links
Route::get('footerFilter','Pages\searchController@footerSearch');
Route::get('search','Pages\searchController@index');
//emailSening on search page
Route::get('contactAgent','Pages\contactUsController@contactAgent');
//contactUs Page
Route::get('contactUs','Pages\contactUsController@contactUs');
//contactUs Form
Route::get('contactUsForm','Pages\contactUsController@contactUsForm');
Route::post('contactUsForm','Pages\contactUsController@contactUsForm');

Route::get('companyFilter','Pages\companiesController@index')->name('agentFilter');
Route::get('companies','Pages\companiesController@index')->name('companyFilter');
Route::get('/company{id}','Pages\companiesController@singleCompany');
//test
// Route::get('mailTest','Pages\contactUsController@mailTest');


//pending
//search page Advance filters
Route::get('advanceFilter','Pages\searchController@advanceFilter')->name('advanceFilter');

//autocomplete location in search
Route::get('ajaxLocation','Pages\homeController@ajaxLocation')->name('ajaxLocation');
Route::get('search','Pages\homeController@search');

//submit property
Route::get('submitPropertyForm',function(){
	return view('Pages.submitPropertyForm');
});
Route::get('submitProperty','Pages\homeController@submitProperty');