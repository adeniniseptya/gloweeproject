<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Glowee')</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/adminprofile.css') }}" rel="stylesheet">
  <link href="{{ asset('css/userassesment.css') }}" rel="stylesheet">

</head>
<body>
  <div data-include>
    @include('partials.navbar')
  </div>

  <main>
    @yield('content')
  </main>

  <script src="{{ asset('js/include.js') }}"></script>
  @stack('scripts')
</body>
</html>
