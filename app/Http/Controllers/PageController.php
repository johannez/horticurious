<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    $portfolios = [
      [
        'title' => 'Portfoli 1',
        'images' => [
          'https://picsum.photos/650/400?image=0',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random'
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ],
      [
        'title' => 'Portfoli 2',
        'images' => [
          'https://picsum.photos/650/400?image=100',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random'
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ],
      [
        'title' => 'Portfoli 3',
        'images' => [
          'https://picsum.photos/650/400?image=200',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random'
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ],
      [
        'title' => 'Portfoli 4',
        'images' => [
          'https://picsum.photos/650/400?image=310',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random'
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ],
      [
        'title' => 'Portfoli 5',
        'images' => [
          'https://picsum.photos/650/400?image=400',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random',
          'https://picsum.photos/650/400?random'
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ],
      [
        'title' => 'Portfoli 6',
        'images' => [
          'https://picsum.photos/650/400?image=500',
          'https://picsum.photos/650/400?random',
        ],
        'description' => 'Vivamus consectetuer hendrerit lacus. Vivamus elementum semper nisi. Cras non dolor.'
      ]
    ];

    return view('page.home', compact('services', 'portfolios'));
  }
}
