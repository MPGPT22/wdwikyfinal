<!DOCTYPE html>
<html lang="en">

  <head>

    @include('partials._head')

  </head>

  <body>

    <div id="page-container" class="page-container page-header-fixed">

    @include('partials._nav')

    @include('partials._sidebar')

    <div class="container content-padding">


    @yield('content')


    </div>

    @include('partials._footer')

    </div>

    @include('partials._scripts')

  </body>
</html>
