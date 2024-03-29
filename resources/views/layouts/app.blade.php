<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Chartjs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

  <!-- Authentication Links -->
  @guest
  @if (Route::has('login'))
  <li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  </li>
  @endif

  @if (Route::has('register'))
  <li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
  </li>
  @endif
  @else
  <!--     <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        </div>
    </li> -->
  @endguest

  <div id="app">
    <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
          <div class="logo"><a href="#"><img src="../images/patrolplan.png"></a></div>
          <div class="title"><a href="#">
              <h3>
                AC-SIS STAKEHOLDER<br />
                INFORMAITON SYSTEM
            </a>
            </h3>
          </div>
          <ul class="links">
            <li><a href="/home">Home</a></li>

            <!-- Dropdown start -->
            <li>
              <a href="#" class="desktop-link">Advisory List</a>
            </li>

            <!-- Dropdown End -->
            <li>
              <a href="#" class="desktop-link">Activity</a>
              <input type="checkbox" id="show-services">
              <label for="show-services">Activity</label>
              <ul>
                <li><a href="/activity">Activity</a></li>
                <li><a href="/createmeeting">Create Meeting</a></li>
                <li><a href="/balancedScorecardManagement">Balanced Scorecard Management</a></li>
              </ul>
            </li>
            <li><a href="/notification">Notification</a></li>
            @if(Auth::user()->role != 'stakeholder')
            <li>
              <a href="#" class="desktop-link">Maintenance</a>
              <input type="checkbox" id="show-maintenance">
              <label for="show-maintenance">Maintenance</label>
              <ul>
                <li><a href="/admin">Admin</a></li>
                @if(Auth::user()->role != 'admin')
                <li><a href="/advisoryCouncil">Advisory Council</a></li>
                <li><a href="/technicalWorkingGroup">Technical Working Group</a></li>
                <li><a href="/policeStrategyManagementUnit">Police Strategy Management Unit</a></li>
                <li><a href="/superadminMaintenance">Superadmin Maintenance</a></li>
                @endif
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            @endif
            <div class="person">
              <a href="/editAccount">
                <img class="personLogo" src="../images/personLogo.png" />
              </a>
            </div>
          </ul>
        </div>
      </nav>
    </div>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>