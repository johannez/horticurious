@extends('base', [
  'title' => $portfolio->title . ' | Horticurious Gardening',
  'body_classes' => ['entity-portfolio', 'portfolio-id-' . $portfolio->id]
])


@section('main')

  <article class="portfolio md:flex max-w-container mx-auto px-4 py-8 md:py-16" id="portfolio-{{ $portfolio->id }}">

    <section class="portfolio__left md:w-1/2 md:pr-8">
      <h1>{{ $portfolio->title }}</h1>
      <div class="portfolio__description text-lg md:text-2xl my-10">{!! $portfolio->description !!}</div>
    </section>


    <section class="portfolio__right md:w-1/2">
      <div class="portfolio__images flex flex-wrap">
        @foreach($portfolio->images()->get() as $image)
          <div class="image w-1/2">
            <img src="{{ $image->path }}" alt="{{ $image->alt }}">
          </div>
        @endforeach
      </div>
    </section>

  </article>

@endsection


