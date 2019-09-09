<!DOCTYPE html>
<html lang="pt-br">
  <head>
    @include('layouts.black.head')
  </head>

<body class="">
    <div id="app">
        <div class="wrapper">
            <div class="main-panel">
                @include('layouts.black.auth.header')
                <div class="content">
                    @yield('layouts.black.auth.content')
                </div>
                @include('layouts.black.auth.footer')
            </div>
        </div>
    </div>
  </body>
</html>
