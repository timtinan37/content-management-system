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

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/dashboard.css') }}" rel="stylesheet">
  </head>

  <body>
    @include('backend.top-nav')
    <div class="container-fluid">
      <div class="row">
        @include('backend.side-nav')
        @include('backend.main')
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
