<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <style>
        :root{
            --bs: 0.25em 0.25em 0.75em rgba(0,0,0,.25), 0.125em 0.125em 0.25em rgba(0,0,0,.15);
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav,
        body {
          background-color: #f1f1f1;
          height: 100%;
          padding: 3%;
          font-family: 'Montserrat', sans-serif;
        }

        .col-sm-3 {
            right: 1em;
        }

        .well {
            margin-top: 2.5em;
            box-shadow: var(--bs);
        }

        img {
            box-shadow: var(--bs);
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
          .row.content {height: auto;}
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="/pegawai">Pegawai</a></li>
              <li><a href="/absen">Absen</a></li>
              <li><a href="/pendapatan">Pendapatan</a></li>
              <li><a href="/bank">Bank</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content p-4">
            <div class="col-sm-3 sidenav hidden-xs">
                <img src="{{ asset('images/fotobackgroundmerah.png') }}" width = "200px" height="250px" class="img-rounded">
                <br>
                <h1>
                    Mohamad Rafi Irfansyah
                </h1>
                <h2>
                    5026201099
                </h2>
                <ul class="nav nav-pills nav-stacked">
                <li><a href="/pegawai">Pegawai</a></li>
                <li><a href="/absen">Absen</a></li>
                <li><a href="/pendapatan">Pendapatan</a></li>
                <li><a href="/bank">Bank</a></li>
                </ul><br>
            </div>


            <div class="col-sm-9">
                <div class="well">
                    <h3>@yield('judulhalaman')</h3>

                    @section('konten')

                    @show
                </div>
            </div>
        </div>
    </div>
</body>

</html>
