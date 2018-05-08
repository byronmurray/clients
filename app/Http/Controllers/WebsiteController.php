<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( )
  {

      $websites = Website::all();

      return view('websites.index', compact('websites'));
  }


  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {

      $website = Website::where( 'client_id', $id )->first();

      return view('websites.show', compact('website'));
  }
}
