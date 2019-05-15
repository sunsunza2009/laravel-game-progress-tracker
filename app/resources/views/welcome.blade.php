<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="author" content="">

        <title>GameRoom</title>
		
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
		<!-- CSS -->
		<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
		
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
			
    </head>
    <body>
	
	<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">หน้าแรก</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))      
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
						<li>
                        <a href="{{ route('login') }}" class="btn btn-default btn-lg">Login</a>
						</li>
                        @if (Route::has('register'))
							<li>
                            <a href="{{ route('register') }}">Register</a>
							</li>
                        @endif
                    @endauth      
            @endif
                </ul>
            </div>
            <!-- /navbar-collapse -->
        </div>
        <!-- /container -->
    </nav>
	
	<a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>GameRoom</h1>
                        <h3>Track your game progress</h3>
                        <hr class="intro-divider">
                    </div>
                </div>
            </div>

        </div>
        <!-- /container -->
    </div>
	
	<!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr>
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Save progress</h2>
                    <p class="lead">Save game progress to continue game.</p>
                </div> 
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr>
                    <div class="clearfix"></div>
					<h2 class="section-heading">Age Verify</h2>
                    <p class="lead">Verify your age for accessing adult content.</p>
                </div>            
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
    <!-- /.content-section-a -->

	
	<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">หน้าแรก</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
						   <a href="https://github.com/sunsunza2009/laravel-game-progress-tracker">GitHub</a>    
                        </li>
                    </ul>
                  <!--  <p class="copyright text-muted small">Copyright &copy; ZuGeTor. All Rights Reserved</p>  -->
                </div>
            </div>
        </div>
    </footer>

    </body>
</html>
