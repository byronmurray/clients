<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = Client::all();

        return view('home', compact('clients'));
    }
}
