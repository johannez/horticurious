@extends('base', [
  'title' => 'Horticurious Gardening',
  'body_classes' => ['entity-page']
])


@section('main')

  <article class="page page--home">

    <header class="page__header relative max-w-site mx-auto mb-8 md:mb-16">
      <div class="page__header-image">
        <img src="/storage/images/ocean_garden_lg.jpg">
      </div>

      <div class="page__intro relative text-white center-vertical md:max-w-md lg:max-w-xl">
        <div class="bg-teal-dark md:bg-teal -mt-8 md:mt-0 opacity-75 absolute right-0 left-0 top-0 bottom-0"></div>
        <div class="relative z-10 py-6 md:py-8 lg:py-16 px-4 md:px-8 lg:px-16">
          <h1>Horticurious Gardening</h1>
          <p class="text-sm md:text-lg lg:text-2xl">Design, Installation, and Maintenance</p>
        </div>
      </div>
    </header>

    <div class="page__content">
      <section id="section-services" class="mb-16">
        <div class="text-center px-4 mx-auto md:max-w-2xl">
          <h2>Services</h2>
          <div class="introduction mt-1 text-lg md:text-xl text-gray-500">Morbi nec metus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Fusce vulputate eleifend sapien.</div>
        </div>

        <div class="service-listing md:flex justify-center my-8 md:my-16">
          @foreach ($services as $service)
            <div class="service px-4 flex-1 w-full max-w-xs mx-auto md:mx-0 mb-8 md:mb-0 text-center leading-tight">
              <div class="service__icon mb-2 text-teal"><i class="fas fa-{{ $service['icon'] }} fa-3x w-8 h-8 md:w-auto md:h-auto"></i></div>
              <div class="service__title mb-2 text-2xl md:text-3xl">{{ $service['title'] }}</div>
              <div class="service__description text-gray-500 text-md">{{ $service['description'] }}</div>
            </div>
          @endforeach
        </div>

      </section>

      <section id="section-portfolio">
        <div class="mx-auto max-w-6xl mb-16">
          <h2 class="text-center mb-6">Selected Gardens</h2>
          @include('portfolio.index')
        </div>
      </section>

      <section id="section-horticulture" class="bg-gray-100 mb-16">
        <div class="mx-auto max-w-5xl text-center py-20 px-8">
          <h2>Follow Us</h2>
          <p>blog posts from Tumblr. Link to Facebook and Instagram.</p>
        </div>
      </section>

      <section id="section-testimonial">
        <div class="testimonial my-16 text-center mx-auto max-w-5xl px-4">
          <div class="testimonial__content text-2xl md:text-3xl text-gray-500 font-light italic leading-tight">&#8222;Praesent vestibulum dapibus nibh. Praesent ac sem eget est egestas volutpat. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.&#8221;</div>
          <div class="testimonial__author mt-4 text-gray-700 text-right">&#8213;Proin viverra ligula sit</div>
        </div>
      </section>

      <section id="section-contact" class="bg-green py-8 md:py-20">
        <div class="mx-auto max-w-4xl px-4">
          <h2 class="text-white text-center md:text-left">Let's Talk</h2>
          @include('partials.contact-form')
        </div>
      </section>
    </div>

  </article>

@endsection
