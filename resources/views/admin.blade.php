<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials._head-admin')

  </head>

  <body>

    <div id="page-container" class="page-container page-header-fixed">

    @include('partials._nav-admin')

    @include('partials._sidebar-admin')

    <div class="content">


    @yield('content')


    </div>

    </div>

    @include('partials._scripts-admin')

  </body>
</html>
