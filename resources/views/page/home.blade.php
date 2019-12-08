@extends('base', [
  'title' => 'Horticurious Gardening',
  'body_classes' => ['entity-page']
])


@section('main')

  <article class="page page--home">

    <header class="page__header relative mb-16">
      <div class="page__header-image">
        <img src="https://picsum.photos/1440/720?image=976">
        <div class="page__header-image-filter"></div>
      </div>

      <div class="image-filter"></div>

      <div class="page__intro text-white center-vertical px-8">
        <div class="mx-auto max-w-2xs md:max-w-lg">
          <h1>Horticurious Gardening</h1>
          <p class="text-sm md:text-lg lg:text-2xl">Design, Installation, and Maintenance</p>
        </div>
      </div>
    </header>

    <div class="page__content">
      <section id="services">
        <div class="text-center mx-auto max-w-2xl">
          <h2>Services</h2>
          <div class="introduction mt-1 text-xl text-gray-500">Morbi nec metus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Fusce vulputate eleifend sapien.</div>
        </div>

        <div class="service-listing flex justify-center my-16">
          @foreach ($services as $service)
            <div class="service px-4 flex-1 max-w-xs text-center leading-tight">
              <div class="service__icon mb-2 text-teal"><i class="fas fa-{{ $service['icon'] }} fa-3x"></i></div>
              <div class="service__title mb-2 text-3xl">{{ $service['title'] }}</div>
              <div class="service__description text-gray-500 text-md">{{ $service['description'] }}</div>
            </div>
          @endforeach
        </div>

      </section>

      <section id="portfolio">
        <div class="mx-auto max-w-6xl mb-16">
          <h2 class="text-center mb-6">Selected Gardens</h2>
          @include('portfolio.index')
        </div>
      </section>

      <section id="horticulture" class="bg-gray-100 mb-16">
        <div class="mx-auto max-w-5xl text-center py-20 px-8">
          <h2>Follow Us</h2>
          <p>blog posts from Tumblr. Link to Facebook and Instagram.</p>
        </div>
      </section>

      <section id="testimonial">
        <div class="testimonial my-16 text-center mx-auto max-w-5xl">
          <div class="testimonial__content text-3xl text-gray-500 font-light italic leading-tight">&#8222;Praesent vestibulum dapibus nibh. Praesent ac sem eget est egestas volutpat. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.&#8221;</div>
          <div class="testimonial__author mt-4 text-gray-700 text-right">&#8213;Proin viverra ligula sit</div>
        </div>
      </section>

      <section id="contact" class="bg-green py-20">
        <div class="mx-auto max-w-4xl">
          <h2 class="text-white">Let's Talk</h2>
          @include('partials.contact-form')
        </div>
      </section>
    </div>

  </article>

@endsection
