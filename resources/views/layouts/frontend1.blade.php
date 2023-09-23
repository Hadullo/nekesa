<!DOCTYPE html>
<html lang="en">
<section>
   @include('includes.front.head')
</section>

<body>
    <div id="wrapper">
<section>
    @include('includes.front.header')
</section>

<section>
    @yield('content')
</section>

<section>
    @include('includes.front.footer')
</section>
    </div>
</body>
</html>
