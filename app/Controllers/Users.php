<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin', 'name' => 'Alek Lumangtad', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'name' => 'Rion Aguasito', 'role' => 'Cashier'],
            ['username' => 'cashier2', 'name' => 'Mykel Romero', 'role' => 'Cashier'],
            ['username' => 'manager', 'name' => 'Josh Remp Dee', 'role' => 'Manager'],
            ['username' => 'support', 'name' => 'Angelica Salantes', 'role' => 'Support Staff'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}