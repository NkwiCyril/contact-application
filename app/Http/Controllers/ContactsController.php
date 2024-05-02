<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public $contacts = [
        1 => [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@example.com',
            'company' => 'ABC Inc.',
            'address' => '123 Main St, City, Country',
            'phone_number' => '123-456-7890'
        ],
        2 => [
            'firstname' => 'Jane',
            'lastname' => 'Smith',
            'email' => 'jane@example.com',
            'company' => 'XYZ Corp.',
            'address' => '456 Elm St, City, Country',
            'phone_number' => '987-654-3210'
        ],
        3 => [
            'firstname' => 'Alice',
            'lastname' => 'Johnson',
            'email' => 'alice@example.com',
            'company' => '123 Industries',
            'address' => '789 Oak St, City, Country',
            'phone_number' => '555-123-4567'
        ],
        4 => [
            'firstname' => 'Michael',
            'lastname' => 'Brown',
            'email' => 'michael@example.com',
            'company' => 'DEF Co.',
            'address' => '321 Maple St, City, Country',
            'phone_number' => '456-789-0123'
        ],
        5 => [
            'firstname' => 'Emily',
            'lastname' => 'Davis',
            'email' => 'emily@example.com',
            'company' => '456 Corp.',
            'address' => '987 Pine St, City, Country',
            'phone_number' => '789-012-3456'
        ],
        6 => [
            'firstname' => 'William',
            'lastname' => 'Wilson',
            'email' => 'william@example.com',
            'company' => 'GHI Ltd.',
            'address' => '654 Cedar St, City, Country',
            'phone_number' => '321-654-9870'
        ],
        7 => [
            'firstname' => 'Sophia',
            'lastname' => 'Lee',
            'email' => 'sophia@example.com',
            'company' => '789 Enterprises',
            'address' => '147 Birch St, City, Country',
            'phone_number' => '654-987-3210'
        ],
        8 => [
            'firstname' => 'Daniel',
            'lastname' => 'Taylor',
            'email' => 'daniel@example.com',
            'company' => 'JKL Corp.',
            'address' => '258 Pineapple St, City, Country',
            'phone_number' => '012-345-6789'
        ],
        9 => [
            'firstname' => 'Olivia',
            'lastname' => 'Martinez',
            'email' => 'olivia@example.com',
            'company' => 'MNO Tech',
            'address' => '369 Mango St, City, Country',
            'phone_number' => '987-654-3210'
        ],
        10 => [
            'firstname' => 'Matthew',
            'lastname' => 'Anderson',
            'email' => 'matthew@example.com',
            'company' => 'PQR Solutions',
            'address' => '852 Coconut St, City, Country',
            'phone_number' => '456-789-0123'
        ]
    ];

    public function welcome() {
        return view('welcome');
    }

    public function index() {
        return view('contacts.index', [
            'contacts' => $this->contacts,
        ]);
    }

    public function create() {
        return view('contacts.create');
    }

    public function show($id) {
        return view('contacts.show', [
            'contact' => $this->contacts[$id],
        ]);
    }

    public function edit($id) {
        $companies = array_unique(array_column($this->contacts, 'company'));
        return view('contacts.edit', [
            'contact' => $this->contacts[$id],
            'companies' => $companies
        ]);
    }
}