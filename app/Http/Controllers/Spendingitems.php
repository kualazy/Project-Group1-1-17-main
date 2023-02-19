<?php

namespace App\Http\Controllers;

use App\Models\statement;

class Spendingitems extends Controller
{
    public function index()
    {
        $statement = statement::all();
        $statement->map(function ($statement) {
            $statement->total = $statement->money - $statement->money2;
        });
        return view("Spendingitems", compact('statement'));
    }
}
