<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>&LT;S/Ware&GT;</title>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Michroma font -->
        <link href='//fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>
        
        <!-- Bootstrap Override CSS file -->
        <link rel="stylesheet" href="css/app.css">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/images/FavSware.png" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="js/active_navbar.js"></script>
    </head>
    
    <body>
        <div class="heading">
            <!-- Navbar -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">&LT;S/ Ware&GT;</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">[ : : <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home : : ]<span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="/dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">[ : : <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Services : : ] <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/webdevelopment"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp&nbsp&LT;/Webdevelopment&GT;</a></li>
                                    <li><a href="/e-maintenance"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp&nbsp&LT;/E-Maintenance&GT;</a></li>
                                    <li><a href="/e-cleaning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp&nbsp&LT;/E-Cleaning&GT;</a></li>
                                </ul>
                            </li>
                            <li><a href="/team">[ : : <span class="glyphicon glyphicon-console" aria-hidden="true"></span> Ons team : : ]</a></li>
                            <li ><a href="/contact">[ : : <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Contact : : ]</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                @if(Auth::guest())
                                <a href="/inlog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">[ : : <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mijn Sware : : ] <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp&nbsp[ : : Inloggen : : ]</a></li>
                                    <li><a href="/register"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp&nbsp[ : : Aanmelden : : ]</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/sware-lidmaatschap"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp&nbsp[ : : Waarom lid worden? : : ]</a></li>
                                </ul>
                                @else
                                <a href="/inlog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">[ : : <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }} : : ] <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/mijn-overzicht">[ : : Mijn overzicht : : ]</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            [ : : Uitloggen : : ]
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                @endif
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <div class="container">
            <div class="col-lg-12">
            <div class="row" >
                <div class="col-md-12">
                    <div class="page-header" style="text-align: center;">
                        <h1 style="font-size: 1000%;">&LT;S/ Ware&GT; 
                            <br>
                            <small style="font-size: 45%;">[ : : To the codeverse and beyond! : : ]</small>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                @yield('content')
            </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="navbar-bottom">
            <hr>
            <h1>&LT;S/ Ware&GT;&trade; maakt gebruik van <a href="https://www.laravel.com"><img src="https://cdn4.iconfinder.com/data/icons/logos-3/256/laravel-128.png" width="30px" height="30px"></a> Laravel</h1>
        </footer>

    </body>
    
</html>