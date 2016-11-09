<?php

Route::get('/', [
    'as' => 'painel.index',
    'uses' => 'PainelController@index'
]);

Route::get('/socios', [
    'as' => 'partners.index',
    'uses' => 'PartnerController@index'
]);

Route::get('/socio/novo', [
    'as' => 'partners.new',
    'uses' => 'PartnerController@new'
]);

Route::get('/socio/{partner}/editar', [
    'as' => 'partners.edit',
    'uses' => 'PartnerController@edit'
]);

Route::post('/socio/{partner}/editar', [
    'as' => 'partners.update',
    'uses' => 'PartnerController@update'
]);

Route::post('/socio/novo', [
    'as' => 'partners.create',
    'uses' => 'PartnerController@create'
]);

Route::get('/socio/{partner}/deletar', [
    'as' => 'partners.delete',
    'uses' => 'PartnerController@delete'
]);

Route::get('/empresas', [
    'as' => 'companies.index',
    'uses' => 'CompanyController@index'
]);

Route::get('/empresa/novo', [
    'as' => 'companies.new',
    'uses' => 'CompanyController@new'
]);

Route::get('/empresa/{company}/editar', [
    'as' => 'companies.edit',
    'uses' => 'CompanyController@edit'
]);

Route::post('/empresa/{company}/editar', [
    'as' => 'companies.update',
    'uses' => 'CompanyController@update'
]);

Route::post('/empresa/novo', [
    'as' => 'companies.create',
    'uses' => 'CompanyController@create'
]);

Route::get('/empresa/{company}/deletar', [
    'as' => 'companies.delete',
    'uses' => 'CompanyController@delete'
]);
