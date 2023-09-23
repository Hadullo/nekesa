<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.admin.head')
</head>

<body>

<header>
    @include('includes.admin.header')
</header>
  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    @include('includes.admin.sidebar')
</aside><!-- End Sidebar-->

<main id="main" class="main">
    @yield('content')
</main><!-- End #main -->

<footer class="">
    @include('includes.admin.footer')
</footer>

</body>
</html>
