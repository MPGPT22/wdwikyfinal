<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials._head-admin')

  </head>

  <body>

    @include('partials._nav-admin')

    <div class="container-fluid">

    <div class="row">
      
    @include('partials._sidebar-admin')

    

    @yield('content')

    </div>

    </div>

    @include('partials._footer')

    @include('partials._scripts')

    @yield('scripts')

  </body>
</html>
