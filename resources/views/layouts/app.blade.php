
<!doctype html>
<html lang="ru">
  <x-head.head />

  <body id="body" class="bg-white">
    @if(Auth::check())
        <x-header.admin/>
    @endif
    @if(!request()->is('admin/*') && !request()->routeIs('admin'))
        <x-header.header />
    @endif




          @yield('content')

    <x-footer.footer />

  </body>
</html>
