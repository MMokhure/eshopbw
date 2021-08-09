<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function adduser()
    {
        return view('new_user');
    }

    public function addinventory()
    {
        return view('new_inventory');
    }

    public function inventory()
    {
        return view('manage_inventory');
    }

    public function stations()
    {
        return view('manage_stations');
    }

    public function classification()
    {
        return view('inventory_classification');
    }
}
