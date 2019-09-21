@extends('base', [
  'title' => $portfolio->title . ' | Horticurious Gardening',
  'body_classes' => ['entity-portfolio', 'portfolio-id-' . $portfolio->id]
])


@section('main')

  <article class="portfolio container" id="portfolio-{{ $portfolio->id }}">

    <header class="portfolio__header relative">
      <div class="portfolio__header-image">
        <img src="{{ $portfolio->header_image->path }}" alt="{{ $portfolio->header_image->alt }}">
      </div>
      <div class="image-filter"></div>
      <h1 class="text-white text-center center-vertical px-8">{{ $portfolio->title }}</h1>
    </header>


    <section class="portfolio__content">
      
      <div class="portfolio__description text-gray-500 text-2xl my-10 mx-auto max-w-5xl">{!! $portfolio->description !!}</div>

      <div class="portfolio__images">
        @foreach($portfolio->images()->get() as $image)
          <div class="image">
            <img src="{{ $image->path }}" alt="{{ $image->alt }}">
          </div>
        @endforeach
      </div>
    </section>

  </article>

@endsection
