<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>МГУшники</title>

    <!-- Scripts -->


    <!-- Styles -->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-0/css/style.default.bd85ceb1.css" id="theme-stylesheet">
    <style>
        .sidebar {
            width: 19rem;
            transition: all 0.2s;
            background: #fff;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
            z-index: 2;
        }
    </style>
    <meta name="theme-color" content="#1E74FD">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">


</head>

<!-- style="background: #edeef0;" -->
<body class="bg-light">
    <div id="app">
        <!-- navbar-->
        <header class="header">
          <nav class="navbar navbar-expand-lg px-4 py-3 bg-white shadow"><h2 class="m-0 p-1">TRAFFIC HOOK</h2></nav>
        </header>
        <div class="d-flex align-items-stretch">
          <div class="sidebar py-3" id="sidebar">
            <ul class="list-unstyled">
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/map" class="sidebar-link text-muted {{  Route::current()->uri() ==  'map' ? 'active' : ''  }}">Карта пробок</span></a>
                  </li>
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/trafficlights" class="sidebar-link text-muted {{  Route::current()->uri() ==  'trafficlights' ? 'active' : ''  }}">Информация о светофорах</span></a>
                  </li>
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/trafficregulations" class="sidebar-link text-muted {{  Route::current()->uri() ==  'trafficregulations' ? 'active' : ''  }}">Управление трафиком</span></a>
                  </li>
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/recomendations" class="sidebar-link text-muted {{  Route::current()->uri() ==  'recomendations' ? 'active' : ''  }}">Рекомендации</span></a>
                  </li>
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/export" class="sidebar-link text-muted {{  Route::current()->uri() ==  'export' ? 'active' : ''  }}">Экспорт данных</span></a>
                  </li>
                  <li class="sidebar-list-item">
                    <a style="font-size: 15px;" href="/fix" class="sidebar-link text-muted {{  Route::current()->uri() ==  'fix' ? 'active' : ''  }}">Изношенность датчиков</span></a>
                  </li>
            </ul>
          </div>
          <div class="page-holder bg-gray-100 p-4">
            @yield('content')
          </div>
        </div>        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>




