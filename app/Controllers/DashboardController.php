<?php

namespace App\Controllers;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return view('login');
        }

        $role = $session->get('role');

        if ($role == 'admin') {
            $model = new UserModel();
            $users = $model->findAll();
            return view('admin_dashboard', ['users' => $users]);
        } else {
            // static coffee shop products
            $items = [
                ['name' => 'Espresso', 'description' => 'Strong black coffee', 'price' => 100],
                ['name' => 'Latte', 'description' => 'Espresso with milk', 'price' => 120],
                ['name' => 'Cappuccino', 'description' => 'Espresso with foamed milk', 'price' => 130],
                ['name' => 'Americano', 'description' => 'Espresso with hot water', 'price' => 110]
            ];

            return view('customer_dashboard', ['items' => $items]);
        }
    }
}
