<!DOCTYPE html>
<html lang="pt-br">
  <head>
    @include('layouts.black.head')
  </head>

<body class="">
    <div id="app">
        <div class="wrapper">
            @include('layouts.black.sidebar')
            <div class="main-panel">
                @include('layouts.black.header')
                <div class="content">
                    @yield('layouts.black.content')
                </div>
                @include('layouts.black.footer')
            </div>
        </div>
    </div>
    @include('layouts.black.scripts')
  </body>
</html>
