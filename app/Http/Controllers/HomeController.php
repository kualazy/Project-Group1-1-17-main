<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\statement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $account = accounts::find(1)->money;
        $statement = statement::orderBy('id', 'desc')->limit('10')->get();
        return view('home', compact('account', 'statement'));
    }
}
