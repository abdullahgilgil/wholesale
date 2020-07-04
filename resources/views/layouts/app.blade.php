<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title', 'WholeSale')</title>
   @include('partials.links')

   <!-- Styles -->
{{--       <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

   @stack('customCss')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="app" class="wrapper">
   @include('partials.nav')

   @include('partials.sidebar')

   <main class="content-wrapper">
      @yield('content')
      <div id="sidebar-overlay"></div>
   </main>

</div>

   @include('partials.scripts')
   @stack('customJs')
</body>
</html>
