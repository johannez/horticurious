<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PageController extends Controller
{
  public function home()
  {
    $services = [
      [
        'icon' => 'pencil-ruler',
        'title' => 'Design',
        'description' => 'Integer tincidunt. Cras sagittis. Morbi vestibulum volutpat enim.'
      ],
      [
        'icon' => 'truck-pickup',
        'title' => 'Installation',
        'description' => 'Quisque malesuada placerat nisl. Etiam ultricies nisi vel augue.'
      ],
      [
        'icon' => 'tree',
        'title' => 'Maintenance',
        'description' => 'Phasellus nec sem in justo pellentesque facilisis. Etiam sit amet orci eget eros faucibus tincidunt.'
      ]
    ];

    $portfolios = Portfolio::get();

    return view('page.home', compact('services', 'portfolios'));
  }
}
