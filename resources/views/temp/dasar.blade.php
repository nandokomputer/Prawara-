<!DOCTYPE html>
<html lang="en">

<head>

@include('temp.head')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">

@include('temp.navbar')

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


@yield('content')


@include('temp.foot')

@include('temp.script')

</body>

</html>