<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CHEP MATATU SACCO||</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset ('assets/css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset ('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{ asset ('assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset ('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{ asset ('assets/img/sidebar-2.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/system/admin" class="simple-text">
                    CHEP M SACCO
                </a>
            </div>

            <ul class="nav">
							<hr>
                <li class="active">
                    <a>
                        <h5>Manage Members</h5>
                    </a>
                </li>
								<hr>
								<li>
                    <a href="/system/create">
                        <i class="pe-7s-server"></i>
                        <p>New Member</p>
                    </a>
                </li>
								<li>
                    <a href="/system/member/view">
                        <i class="pe-7s-look"></i>
                        <p>View Members</p>
                    </a>
                </li>
								<hr><hr>
                <li class="active">
                    <a>
                        <h5>Reminders</h5>
                    </a>
                </li>
								<hr>
								<li>
                    <a href="/system/reminders">
                        <i class="pe-7s-speaker"></i>
                        <h5>DL Reminders</h5>
                    </a>
                </li>
								<li>
                    <a href="/system/reminders">
                        <i class="pe-7s-speaker"></i>
                        <h5>Insurance Reminders</h5>
                    </a>
                </li>
								<hr><hr>

                <li>
                    <a href="#">
                        <i class="pe-7s-map-marker"></i>
                        <p>Mapped Routes</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>


                    </ul>

                    <ul class="nav navbar-nav navbar-right">
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
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
              @yield('content')
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="#">Designed with <i class="fa fa-heart"></i>By Hilda
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
  <script src="{{ asset ('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>
	<script src="{{ asset ('assets/js/chartist.min.js')}}"></script>
  <script src="{{ asset ('assets/js/bootstrap-notify.js')}}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="{{ asset ('assets/js/light-bootstrap-dashboard.js')}}"></script>
	<script src="{{ asset ('assets/js/demo.js')}}"></script>

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

</html>
