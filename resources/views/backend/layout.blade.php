<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tariq Imtinan">
    <meta name="generator" content="Jekyll v3.8.6">
    <meta name="theme-color" content="#563d7c">
    
    <title>Ready Mart</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>

  <body>
    @include('backend.top-nav')
    <div class="container">
      <div class="row pb-5">
        @include('backend.side-nav')
        @include('backend.main')
      </div>
    </div>
    @include('backend.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    @stack('scripts')
  </body>
</html>
