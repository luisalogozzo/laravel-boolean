<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacy()
  {
    view('staticpages.privacy');
  }
  public function faq()
  {
    view('staticpages.faq');
  }
}
