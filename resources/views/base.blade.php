<!doctype html>
<html lang="{{ config('app.locale') }}" class="font-body">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEO::generate() !!}
    
    <link rel="shortcut icon" href="/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400|Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0f2a8bbb41.js" crossorigin="anonymous"></script>


    @section('stylesheet')
      <link rel="stylesheet" href="/css/vendor.css" type="text/css">
      <link rel="stylesheet" href="/css/app.css">
    @show

  </head>
  <body class="{{ implode(' ', $body_classes) }}">
    <!--[if lt IE 9]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div id="app">
      @include('partials.header')

      <section id="content" class="pt-20 md:pt-24">
        @yield('main')
      </section>

      @include('partials.footer')
    </div>

    @section('javascript')
      <script type="text/javascript" src="/js/vendor.js"></script>
      <script type="text/javascript" src="/js/app.js"></script>
    @show
  </body>
</html>
