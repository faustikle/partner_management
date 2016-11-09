<?php

Route::get('/', [
    'as' => 'painel.index',
    'uses' => 'PainelController@index'
]);
