<!doctype html>
<html>
<head>
    <title>Chep Matatu Sacco</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chep Matatu sacco" />
    <meta name="keywords" content="matatu sacco" />
    <meta name="author" content="Hilda, iMond Solutions" />

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="./css/animate.css"/>
    <script src="./js/jquery-2.1.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/typer.js"></script>
    <script src="./js/blocs.js"></script>
    <link rel='stylesheet' href='./css/et-line.min.css'/>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway&subset=Raleway,latin-ext' rel='stylesheet'
          type='text/css'>

    <link rel="shortcut icon" href=".ico">
    <link rel="stylesheet" href="{{ asset ('css/cards.css')}}">

</head>
<body>
<!-- Main container -->
<!-- <div class="page-container"> -->

    <!-- Navigation Bloc -->
    <!-- <div class="bloc imond2" id="nav-bloc"> -->
        <div class="">
          <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
      <div class="containe">
        <div class="col-md-4 col-md-offset-1 fh5co-logo">
          <a class="" href="#">CHEP MATATU SACCO</a>
        </div>
        <div class="col-md-6 pull-right text-right fh5co-link-wrap">


            <ul class="fh5co-special" data-offcanvass="yes">
            <form class="" action="/login" method="post">{{ csrf_field()}}
              <li><label class="hilda"><b>EMAIL</b></label><input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" required=""></li>
              <li><label class="hilda"><b>PASSWORD</b></label><input type="password" name="password" placeholder="password"value="{{ old('password') }}" required=""></li>
              <li><button type="submit" name="submit">Submit</button></li>
            </form>
          </ul>

      </div>
    </nav>
        </div>
    </div>
    <!-- Navigation Bloc END -->

    <!-- header -->
    <div class="bloc bgc-outer-space bg-city-overlay fh5co-cover-style-2 d-bloc" id="header">
      <div class="fh5co-overlay">

      </div>
        <div class="fh5co-cover bloc-xl">

            <div class="row" style="padding-top: 20px;">
                <div class="col-sm-5 col-sm-offset-7 fh5co-cover-text fh5co-cover-intro imondopac">
                  <br><br><br><br>  <h3 class="text-center mg-lg tc-white">Sign Up New Member</h3>
                  <form class="form-horizontal" role="form" method="POST" action="/postregister">
                      {{ csrf_field() }}

                      <div class="form-group">
                          <label class="col-md-4 imondwhite control-label">First Name</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 imondwhite control-label">Last Name</label>

                          <div class="col-md-6">
                              <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 imondwhite control-label">E-Mail Address</label>

                          <div class="col-md-6">
                              <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label">User Role</label>
                          <div class="col-md-6">
                            <select class="form-control" name="role">
                              <option></option>
                              <option>admin</option>
                              <option>clerk</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <!-- header END -->

	</footer>
    <div class="row imondblack">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md"><small class="imond1">Designed by
        <a href="#" target="_blank">iMond Solutions</a></small>
      </div>
    </div>
    <!-- Footer - bloc-8 END -->
<!-- </div> -->
<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
