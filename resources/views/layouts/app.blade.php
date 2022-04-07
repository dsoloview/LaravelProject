
<!doctype html>
<html lang="ru">
  <x-head.head />

  <body id="body" class="bg-white">
    @if(Auth::check())
        <x-header.admin/>
    @endif
    <x-header.header />



          @yield('content')

    <x-footer.footer />

  </body>
</html>
