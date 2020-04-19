<div class="portfolio-listing md:flex flex-wrap mb-6">
  @foreach ($portfolios as $port)
    <div class="portfolio md:w-1/3 relative mb-6 md:mb-0">
      <a href="{{ route('portfolio.view', [$port->slug]) }}">
        <div class="portfolio__image">
          @php ($image = $port->images()->first())
          <img src="{{ $image->path }}" alt="{{ $image->alt }}">
        </div>
        <div class="block image-filter"></div>
        <div class="portfolio__title absolute w-full top-1/2 transform -translate-y-1/2 text-center text-white text-xl md:text-2xl p-4">{{ $port->title }}</div>
      </a>
    </div>
  @endforeach
</div>
