@extends('base', [
  'title' => 'Horticurious Gardening',
  'body_classes' => ['entity-page']
])


@section('main')

  <article class="page page--home">

    <header class="page__header">
      <div class="page__header-image">
        <img src="https://picsum.photos/1440/720?image=976">
        <div class="page__header-image-filter"></div>
      </div>

      <div class="page__intro">
        <h1>Horticurious Gardening</h1>
        <p>Design, Installation, and Maintenance</p>
      </div>
    </header>

    <div class="page__content">
      <section id="services">
        <h2>Services</h2>
        <div class="introduction">Morbi nec metus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Fusce vulputate eleifend sapien.</div>

        <div class="service-listing">
          @foreach ($services as $service)
            <div class="service">
              <div class="service__icon"><i class="fas fa-{{ $service['icon'] }} fa-3x"></i></div>
              <div class="service__title">{{ $service['title'] }}</div>
              <div class="service__description">{{ $service['description'] }}</div>
            </div>
          @endforeach
        </div>
        
      </section>

      <section id="portfolio">
        <h2>Selected Gardens</h2>
        <div class="portfolio-listing">
          @foreach ($portfolios as $port)
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="{{ $port['images'][0] }}" alt="testing">
              </div>
              <div class="portfolio__title">{{ $port['title'] }}</div>
            </div>
          @endforeach
        </div>

        <div class="testimonial">
          <div class="testimonial__content">Praesent vestibulum dapibus nibh. Praesent ac sem eget est egestas volutpat. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.</div>
          <div class="testimonial__author">Proin viverra ligula sit</div>
        </div>
      </section>

      <section id="horticulture">
        <h2>Follow Us</h2>
        <p>blog posts from Tumblr. Link to Facebook and Instagram.</p>
      </section>

      <section id="contact">
        <div class="container">
          <h2>Let's Talk</h2>
          @include('partials.contact-form')
        </div>
      </section>
    </div>

  </article>

@endsection
