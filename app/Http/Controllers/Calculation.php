<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\statement;

class Calculation extends Controller
{
    public function index()
    {
        $statement = statement::all();
        $money = accounts::all()->first()?->money;

        return view("calculation", compact("statement", "money"));
    }

}
