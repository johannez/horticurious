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

    return view('page.home', compact('services', 'portfolios', 'menu_items'));
  }
}
