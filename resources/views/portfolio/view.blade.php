@extends('base', [
  'title' => $portfolio->title . ' | Horticurious Gardening',
  'body_classes' => ['entity-portfolio', 'portfolio-id-' . $portfolio->id]
])


@section('main')

  <article class="portfolio md:flex max-w-container mx-auto px-4 md:px-8 lg:px-12 py-8 md:py-16" id="portfolio-{{ $portfolio->id }}">

    <section class="portfolio__left md:w-1/2 md:pr-8">
      <h1>{{ $portfolio->title }}</h1>
      <div class="portfolio__description text-lg md:text-xl my-10">{!! $portfolio->description !!}</div>
    </section>


    <section class="portfolio__right md:w-1/2">
      <div class="portfolio__images flex flex-wrap">
        @foreach($portfolio->images()->get() as $image)
          <a href="{{ $image->path }}" data-fancybox="gallery" class="w-1/2">
            <img src="{{ $image->path }}" alt="{{ $image->alt }}" />
          </a>
        @endforeach
      </div>
    </section>

  </article>

@endsection

@section('stylesheet')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  @parent
@endsection

@section('javascript')
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  @parent
@endsection


