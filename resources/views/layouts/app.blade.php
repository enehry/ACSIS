<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/css/default.css"> -->
  <link rel="stylesheet" href="/css/loading.css">
  <link rel="stylesheet" href="/css/maintenance/advisoryCouncil.css">
  <link rel="stylesheet" href="/css/createmeeting.css">
  <link rel="stylesheet" href="/css/home.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- printing datables -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>
  <!-- ajax datables jquery -->


  <style>
    .is-invalid {
      border-color: red !important;
    }
  </style>

</head>

<body>
  <div id="app">

    <nav style="background-color: #211838;" class="navbar navbar-dark navbar-expand-lg">
      <div class=""><a href="#"><img style="height: 60px;" class="img-responsive" src="/images/patrolplan.png"></a></div>
      <h6 class="ml-md-2 text-light">
        AC-SIS STAKEHOLDER<br />
        INFORMATION SYSTEM
        </a>
      </h6>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Advisory List</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Activity
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/activity">Activity</a>
              <a class="dropdown-item" href="/create-meetings">Create Meeting</a>
              <a class="dropdown-item" href="/balancedScorecardManagement">Balanced Scorecard Management</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fas fa-bell"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style="height: 30px;" class="rounded-circle border border-light" src="https://avatars.dicebear.com/api/initials/nehry.svg?background=%23211838">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdown">
              @if (Auth::user()->role != 'stakeholder')
              <a class="dropdown-item" href="/admin">Admin</a>
              @if (Auth::user()->role != 'admin')
              <a class="dropdown-item" href="/advisory-council">Advisory Council</a>
              <a class="dropdown-item" href="/technical-working-group">Technical Working Group</a>
              <a class="dropdown-item" href="/policeStrategyManagementUnit">Police Strategy Management Unit</a>
              <a class="dropdown-item" href="/superadminMaintenance">Superadmin Maintenance</a>
              @endif
              <div class="dropdown-divider"></div>
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
        <div class="dropdown-divider"></div>
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
      </div>
      </li>
      </ul>

  </div>
  </nav>
  <main class="py-4">

    <div class="container">
      @yield('content')
    </div>
  </main>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>
