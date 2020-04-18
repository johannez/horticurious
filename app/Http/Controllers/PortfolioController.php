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

    $menu_items = [
      [
        'id' => '1',
        'text' => 'testing',
        'url' => '/hello',
        'children' => [
          [
            'id' => '1.1',
            'text' => 'oh yeah',
            'url' => '/oh-yeah'
          ],
          [
            'id' => '1.2',
            'text' => 'oh no',
            'url' => '/oh-no',
            'children' => [
              [
                'id' => '1.2.1',
                'text' => 'oh ynonoeah',
                'url' => '/oh-oh-oh'
              ],
            ]
          ],
          [
            'id' => '1.3',
            'text' => 'fuck',
            'url' => '/fuck'
          ],
        ]
      ]
    ];

    return view('portfolio.view', compact('portfolio', 'menu_items'));
  }
}
