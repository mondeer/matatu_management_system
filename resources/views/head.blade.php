<!doctype html>
<html>
<head>
    <title>Chep Matatu Sacco</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Hilda, iMond Solutions" />

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="/css/animate.css"/>
    <script src="/js/jquery-2.1.0.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/typer.js"></script>
    <script src="/js/blocs.js"></script>
    <link rel='stylesheet' href='/css/et-line.min.css'/>
    <link rel='stylesheet' href='/css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway&subset=Raleway,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href="{{ asset('css/gentelella.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href=".ico">

</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- Navigation Bloc -->
    <!-- <div class="bloc" id="nav-bloc"> -->
        <div class=" imondopac">
            <nav class="navbar row">
                <div class="navbar-header col-md-3 col-md-offset-1">
                  	<h1>CHEPLOGO</h1>

                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar imond1"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1 pull-right">
                    <ul class="site-navigation nav navbar-nav">

                        @if (Auth::guest())
                        <li class="line">
                            <a href="/system/admin">Home</a>
                        </li>



                        @else
                        <li class="line">
                            <a href="/system/admin">Home</a>
                        </li>

                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>


            </nav>

        </div>

    <div class="col-md-1 left_col">
    <div class="left_col scroll-view">

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">

                  <!-- Admissions application section -->
                    <li><a href="/system/create"><i class="fa fa-home"></i>Create Member</a></li>
                    <li><a href="/system/member/view"><i class="fa fa-eye"></i>View Motors</a></li>
                    <li><a href="/system/deregister"><i class="fa fa-home"></i>Deregister Member</a></li>

                    <li><a><i class="fa fa-hospital-o"></i> Reminders<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="#">Sacco Payment</a></li>
                          <li><a href="#">Driving License</a></li>
                          <li><a href="#">Insurance</a></li>
                      </ul>
                    </li>



                </ul>
            </div>

        </div>
      </div>
    </div>



    <div class="container body">
        <div class="main_container">

            @yield('main_container')

        </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md"><small>Designed by
        <a href="#" target="_blank">Hilda</a></small>
      </div>
    </div>
    <!-- Footer - bloc-8 END -->
    <script src="{{ asset('js/gentelella.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
          $(".delete").on("submit", function(){
            return confirm("You are About permanently delete member, Continue?");
          });

    </script>

    <script>
    $(document).ready(function(){
        $("#create").on("show.bs.modal", function(e) {
            var id = $(e.relatedTarget).data('target-id');
            $.get( "/controller/" + id, function( data ) {
                $(".modal-body").html(data.html);
            });

        });
    });
    </script>

    <script>
      $(document).ready(function(){
          $("#update").on("show.bs.modal", function(e) {
              var id = $(e.relatedTarget).data('target-id');
              $.get( "/controller/" + id, function( data ) {
                  $(".modal-body").html(data.html);
              });

          });
      });
    </script>

  </body>
  </html>
