<div class="portfolio-listing md:flex flex-wrap mb-6">
  @foreach ($portfolios as $port)
    <div class="portfolio md:w-1/3 max-w-400 mx-auto relative mb-6 md:mb-0">
      <a href="{{ route('portfolio.view', [$port->slug]) }}">
        <div class="portfolio__image">
          @php ($image = $port->getMedia('images')->first())
          @if ($image)
            <img src="{{ $image->getUrl('portfolio-index') }}" alt="{{ $image->getCustomProperty('alt') ? $image->getCustomProperty('alt') : $image->getAttribute('file_name') }}">
          @else
            <img src="//dummyimage.com/400x260.jpg" alt="Portfolio placeholder">
          @endif
        </div>
        <div class="block image-filter"></div>
        <div class="portfolio__title absolute w-full top-1/2 transform -translate-y-1/2 text-center text-white text-xl md:text-2xl p-4">{{ $port->title }}</div>
      </a>
    </div>
  @endforeach
</div>
