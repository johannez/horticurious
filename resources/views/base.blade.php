<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lora:700|Nunito:400,700" rel="stylesheet">
    



    @section('stylesheet')
      {{-- <link rel="stylesheet" href="/css/vendor.css" type="text/css"> --}}
      
      <link rel="stylesheet" href="/css/app.css">
    @show

  </head>
  <body class="{{ implode(' ', $body_classes) }}">
    <!--[if lt IE 9]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div id="page">
      @include('partials.header')

      <section id="content">
        @yield('main')
      </section>

      @include('partials.footer')
    </div>

    @section('javascript')
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/solid.js" integrity="sha384-IA6YnujJIO+z1m4NKyAGvZ9Wmxrd4Px8WFqhFcgRmwLaJaiwijYgApVpo1MV8p77" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/fontawesome.js" integrity="sha384-EMmnH+Njn8umuoSMZ3Ae3bC9hDknHKOWL2e9WJD/cN6XLeAN7tr5ZQ0Hx5HDHtkS" crossorigin="anonymous"></script>

      <script type="text/javascript" src="/js/app.js"></script>
    @show
  </body>
</html>
