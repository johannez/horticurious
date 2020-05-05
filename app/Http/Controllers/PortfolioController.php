<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
  public function view(Request $request, $slug)
  {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

    $menu_items = config('horticurious.mobile_menu');

    return view('portfolio.view', compact('portfolio', 'menu_items'));
  }
}
