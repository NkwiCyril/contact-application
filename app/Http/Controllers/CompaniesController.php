<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function find_company ($name = null) {
        if ($name) {
            return '<h1>Company Name: ' . $name . '</h1>';
    
        } else {
            return '<h1>All Companies</h1>';
        }
    }
}