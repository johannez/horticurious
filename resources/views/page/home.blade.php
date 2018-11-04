@extends('base', [
  'title' => 'Horticurious Gardening',
  'body_classes' => ['entity-page']
])


@section('main')

  <article class="page page--home">

    <header class="content-top">
      <div class="page__header-image">
        <img src="//dummyimage.com/1400x600">
      </div>

      <div class="page__intro">
        <h1>Horticurious Gardening</h1>
        <p>Design, Installation, and Maintenance</p>
      </div>
    </header>


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

  </article>

@endsection
