<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

/**
 * ================
 * contacts routes
 * ================
**/
Route::get('/contacts', function () {
    $contacts = [
        1 => [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'ABC Inc.'
        ],
        2 => [
            'firstname' => 'Jane',
            'lastname' => 'Smith',
            'email' => 'jane@example.com',
            'company' => 'XYZ Corp.'
        ],
        3 => [
            'firstname' => 'Alice',
            'lastname' => 'Johnson',
            'email' => 'alice@example.com',
            'company' => '123 Industries'
        ],
        4 => [
            'firstname' => 'Michael',
            'lastname' => 'Brown',
            'email' => 'michael@example.com',
            'company' => 'DEF Co.'
        ],
        5 => [
            'firstname' => 'Emily',
            'lastname' => 'Davis',
            'email' => 'emily@example.com',
            'company' => '456 Corp.'
        ],
        6 => [
            'firstname' => 'William',
            'lastname' => 'Wilson',
            'email' => 'william@example.com',
            'company' => 'GHI Ltd.'
        ],
        7 => [
            'firstname' => 'Sophia',
            'lastname' => 'Lee',
            'email' => 'sophia@example.com',
            'company' => '789 Enterprises'
        ],
        8 => [
            'firstname' => 'Daniel',
            'lastname' => 'Taylor',
            'email' => 'daniel@example.com',
            'company' => 'JKL Corp.'
        ],
        9 => [
            'firstname' => 'Olivia',
            'lastname' => 'Martinez',
            'email' => 'olivia@example.com',
            'company' => 'MNO Tech'
        ],
        10 => [
            'firstname' => 'Matthew',
            'lastname' => 'Anderson',
            'email' => 'matthew@example.com',
            'company' => 'PQR Solutions'
        ]
    ];
    return view('contacts.index', [
        'contacts' => $contacts,
    ]);
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    return view('contacts.show', [
        'id' => $id,
    ]);
})->name('contacts.show');

Route::get('/contacts/edit/{id}', function ($id) {
    return view('contacts.edit', [
        'id' => $id,
    ]);
})->name('contact.edit');




/**
 * ================
 * companies routes
 * ================
**/
Route::get('/companies/{name?}', function ($name = null) {
    if ($name) {
        return '<h1>Company Name: ' . $name . '</h1>';

    } else {
        return '<h1>All Companies</h1>';
    }

})->whereAlphaNumeric('name');

Route::fallback(function () {
    return '<h1>Sorry! Service unable to load</h1>';
});

/**
 * =====================
 * authentication routes
 * =====================
**/

Route::get('login', function() {
    return view('auth.login');
});

Route::get('register', function() {
    return view('auth.register');
}); 

/**===============
 * profile routes
 * ===============  
 **/

Route::get('profile', function() {
    return view('user.profile');
});