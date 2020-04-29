<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

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

        $menu_items = config('horticurious.mobile_menu');

        return view('page.home', compact('services', 'portfolios', 'menu_items'));
    }

    public function submitContact(Request $request)
    {
        $input = $request->only(['name', 'email', 'company', 'phone', 'message']);
        
        // TODO: Send email to Trisha via Gmail.
        Mail::to('trisha@horticurious.ca')->send(new ContactFormSubmission((object) $input));
          

        return redirect('/')->with('contactFormSubmitted', true);
    }
}
