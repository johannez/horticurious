<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Str;
use App\Portfolio;

class PortfolioController extends Controller
{
  public function view(Request $request, $slug)
  {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

    // Meta tags
    $this->seo()->setTitle($portfolio->title);
    $description = Str::words(strip_tags($portfolio->description), 10, $end='...');
    $this->seo()->setDescription($description);

    $menu_items = config('horticurious.mobile_menu');

    return view('portfolio.view', compact('portfolio', 'menu_items'));
  }
}
