<div class="portfolio-listing flex flex-wrap mb-6">
  @foreach ($portfolios as $port)
    <div class="portfolio w-1/3 relative">
      <a href="{{ route('portfolio.view', [$port->slug]) }}">
        <div class="portfolio__image">
          @php ($image = $port->images()->first())
          <img src="{{ $image->path }}" alt="{{ $image->alt }}">
        </div>
        <div class="image-filter"></div>
        <div class="portfolio__title center-vertical text-center text-white text-2xl p-4">{{ $port->title }}</div>
      </a>
    </div>
  @endforeach
</div>
