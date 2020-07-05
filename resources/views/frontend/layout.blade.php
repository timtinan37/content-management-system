<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ready Mart</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>

  <div class="container pt-5 pb-5">
    @yield('content')
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>
</html>