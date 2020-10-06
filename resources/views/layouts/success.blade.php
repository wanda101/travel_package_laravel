<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>@yield('title')</title>
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>
<body>
  @include('includes.navbar-alternate')
  @yield('content')
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>
</html>