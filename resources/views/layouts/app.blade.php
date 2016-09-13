<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
  ]); ?>
  </script>
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="visa-header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title visible-lg-block visible-md-block">
          <a href="{{ config('app.url') }}">
            {{ config('app.name') }}
          </a>
        </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="mdl-layout-spacer visible-lg-block visible-md-block"></div>
        <!-- Navigation -->
        <div class="visa-navigation-container visible-lg-block visible-md-block">
          <nav class="visa-navigation mdl-navigation">
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/') }}">Home</a>
            @if (Auth::guest())
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/login') }}">Login</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/register') }}">Register</a>
            @else
            <a class="mdl-navigation__link mdl-typography--text-uppercase"  href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout</a>
            @endif
          </nav>
        </div>
        <span class="mdl-layout-title visible-sm-block visible-xs-block">
          <a href="{{ config('app.url') }}">
            {{ config('app.name') }}
          </a>
        </span>
      </div>
    </div>

    <main class="visa-content mdl-layout__content">
      <a name="top"></a>
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
