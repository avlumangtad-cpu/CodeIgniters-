<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['name' => 'Chris Sabater', 'email' => 'chris.sabater@feu.edu.ph', 'phone' => '0917 123 4567'],
            ['name' => 'Adrian Cruz', 'email' => 'adrian.cruz@feu.edu.ph', 'phone' => '0918 234 5678'],
            ['name' => 'Sean Bolor', 'email' => 'sean.bolor@feu.edu.ph', 'phone' => '0919 345 6789'],
            ['name' => 'Czarli Tolentino', 'email' => 'czarli.tolentino@feu.edu.ph', 'phone' => '0920 456 7890'],
            ['name' => 'Jorge Manalac', 'email' => 'jorge.manalac@feu.edu.ph', 'phone' => '0921 567 8901'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}