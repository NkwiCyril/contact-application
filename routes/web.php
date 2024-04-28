<?php

use Illuminate\Support\Facades\Route;

// contacts routes
Route::get('/', function () {
    return '<h1>All contacts</h1>';
});

Route::get('/contact/create', function() {
    return "<h1>Create new contact</h1>";
});

Route::get('/contacts/{id}', function($id) {
    return "<h1>Show contact with id = ". $id ."</h1>";
})->whereNumber('id');

// companies routes
Route::get('/companies/{name?}', function ($name=null) {
    if ($name) {
        # code...
    return '<h1>Company Name: ' . $name. '</h1>';

    } else {
        return '<h1>All Companies</h1>';
    }
    
})->whereAlphaNumeric('name');