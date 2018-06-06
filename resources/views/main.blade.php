<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials._head')

  </head>

  <body>

    <div id="page-container" class="page-container page-header-fixed">

    @include('partials._nav')

    @include('partials._sidebar')

    <div class="content">


    @yield('content')


    </div>

    </div>

    @include('partials._scripts')

  </body>
</html>
