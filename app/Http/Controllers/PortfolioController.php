<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
  public function view(Request $request, $slug)
  {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

    $header_image = [
      'path' => 'https://picsum.photos/1440/720?image=975',
      'alt' => 'testing'
    ];

    $portfolio->header_image = (object) $header_image;

    $menu_items = config('horticurious.mobile_menu');

    return view('portfolio.view', compact('portfolio', 'menu_items'));
  }
}
