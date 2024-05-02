<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// routes associated with contacts
Route::get('/',[ContactsController::class, 'welcome'])->name('welcome');
Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('contacts/create',[ContactsController::class, 'create'])->name('contacts.create');

Route::get('contacts/{id}', [ContactsController::class, 'show'])->name('contacts.show');
Route::get('contacts/edit/{id}', [ContactsController::class, 'edit'])->name('contact.edit');
// Route::patch('contacts/edit/{id}', [ContactsController::class, 'edit'])->name('contact.edit');
Route::post('contacts/update/{id}', [ContactsController::class, 'update'])->name('contact.update');
Route::delete('contacts/{id}', [ContactsController::class, 'delete'])->name('contact.delete');

// routes associated with companies
Route::get('companies/{name?}', [CompaniesController::class, 'find_company'])->whereAlphaNumeric('name');


// routes associated with authentication
Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class. 'register']);
Route::get('logout', [AuthController::class. 'logout']);


// routes for user profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile');