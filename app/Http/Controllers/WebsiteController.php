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
  public function show( Website $website )
  {

      $website = Website::find($website);

      return view('websites.show', compact('website'));
  }
}
