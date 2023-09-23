@include('partials.frontend._head')
@include('partials.frontend._topbar')
@include('partials.frontend._spinner')
@include('partials.frontend._navbar')

        <div class="content">
          @yield('content')
       </div>
@include('partials.frontend._footer')
