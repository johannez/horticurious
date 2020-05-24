<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Testimonial;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $settings = nova_get_settings();
        $this->seo()->setTitle('Landscape Design, Installation, and Maintenance');
        $this->seo()->setDescription('Providing landscaping design, installation and maintenance services for the Comox Valley.');

        $services = [
            [
                'icon' => 'pencil-ruler',
                'title' => nova_get_setting('service1_title', 'Design'),
                'description' => $settings['service1_description']
            ],
            [
                'icon' => 'truck-pickup',
                'title' => nova_get_setting('service2_title', 'Installation'),
                'description' => $settings['service2_description']
            ],
            [
                'icon' => 'tree',
                'title' => nova_get_setting('service2_title', 'Maintenance'),
                'description' => $settings['service3_description']
            ]
        ];

        $portfolios = Portfolio::get();

        $testimonials = Testimonial::get();

        $menu_items = config('horticurious.mobile_menu');

        return view('page.home', compact('services', 'portfolios', 'menu_items', 'testimonials', 'settings'));
    }

    public function submitContact(Request $request)
    {
        $input = $request->only(['name', 'email', 'company', 'phone', 'message']);
        
        // TODO: Send email to Trisha via Gmail.
        Mail::to('trisha@horticurious.ca')->send(new ContactFormSubmission((object) $input));
          

        return redirect('/')->with('contactFormSubmitted', true);
    }
}
