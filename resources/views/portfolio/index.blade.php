<div class="portfolio-listing">
  @foreach ($portfolios as $port)
    <div class="portfolio">
      <a href="{{ route('portfolio.view', [$port->slug]) }}">
        <div class="portfolio__image">
          @php ($image = $port->images()->first())
          <img src="{{ $image->path }}" alt="{{ $image->alt }}">
        </div>
        <div class="portfolio__title">{{ $port->title }}</div>
      </a>
    </div>
  @endforeach
</div>
