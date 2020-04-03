<!DOCTYPE html>
<html lang="en">

<head>

 @include('layouts.partials.head')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('layouts.partials.sidebar')

    @yield('content')

  @include('layouts.partials.js')

</body>

</html>
