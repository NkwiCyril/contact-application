<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        $html = "
            <h1>Contact App</h1>
            <div>
                <a href='" . route('contacts.index') . "'>All Contacts</a>
                <a href='" . route('contacts.create') . "'>Create Contact</a>
                <a href='" . route('contact.show', 1) . "'>Show Contact</a>
            </div>
        ";

        return $html;
    });

    Route::get('/contacts', function () {
        return '<h1>All contacts</h1>';
    })->name('contacts.index');

    Route::get('/contacts/create', function () {
        return "<h1>Create new contact</h1>";
    })->name('contacts.create');

    Route::get('/contacts/{id}', function ($id) {
        return "<h1>Show contact with id = " . $id . "</h1>";
    })->whereNumber('id')->name('contact.show');

    // companies routes
    Route::get('/companies/{name?}', function ($name = null) {
        if ($name) {
            return '<h1>Company Name: ' . $name . '</h1>';

        } else {
            return '<h1>All Companies</h1>';
        }

    })->whereAlphaNumeric('name');
});

