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
        <p>cards with information about the services you offer</p>
      </section>

      <section id="portfolio">
        <h2>Selected Gardens</h2>
        <p>images, title, description</p>

        <p>Random Testimonial</p>
      </section>

      <section id="horticulture">
        <h2>Follow Us</h2>
        <p>blog posts from Tumblr. Link to Facebook and Instagram.</p>
      </section>

      <section id="contact">
        <h2>Let's Talk</h2>
        <p>general contact form</p>
      </section>
    </div>

  </article>

@endsection
