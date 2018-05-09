<?php

namespace App\Http\Controllers;

use App\Client;
use App\Website;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

      $clients = Client::all();

      return view('clients.index', compact('clients'));
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    
      $client = Client::find( $id );

      return view('clients.show', compact('client'));
  }
}
