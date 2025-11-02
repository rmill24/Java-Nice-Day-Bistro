<?php

namespace App\Controllers;

use App\Models\ItemModel;

class MenuController extends BaseController
{
    public function index()
    {
        $itemModel = new ItemModel();
        $items = $itemModel->orderBy('id', 'ASC')->findAll();

        return view('menu', ['items' => $items]);
    }
}
