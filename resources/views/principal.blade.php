<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de informacion turistico</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('css/table/jquery.dataTables.css')!!}
      <link href="font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
    {!! Html::style('assets/css/sidebar.css') !!}
    {!! Html::script('assets/js/ajax.js')!!}
    {!! Html::script('assets/js/sidebar2.js')!!}
{!! Html::script('js/table/jquery.dataTables.js')!!}
    {!! Html::script('assets/js/bootstrap.js')!!}
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <style type="text/css">
        .service-box i
        {
            color: #fff;
        }
        .service-box:hover
        {
            background-color: #D9BD4C;
            opacity: 0.6;
            zoom: 1.05;
            height: 150px;
            border-radius: 15px; 
            padding: 10px;
        }
    </style>
    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/inicio">LA PAZ - BOLIVIA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url('/en') }}">EN</a>
                    </li>
                    <li style="font-size: 30px;">
                        |
                    </li>
                    <li>
                        <a href="{{ url('/es') }}">ES</a>
                    </li>
                    <li>
                        <a  href="">{{ trans('principal.bienvenido') }}
                        <?php 
                        if(isset(Auth::user()->NOM_USU))
                        {
                            echo Auth::user()->NOM_USU.' </li>                   <li>
                        <a href="logout">'.trans("principal.cerrar").'</a>
                    </li>
';
                        }
                        else
                        {
                            echo "Invitado";
                        }
                            ?></a>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content" style="height: auto;">
            <div class="header-content-inner">
            <div class="container">
            </div> 
        </div>
        <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br/>
                      <br/>
                        <br/>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-o text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal7') }}</h3>
                        <br/>
                        <br/>
                    </div>
                </div></a>
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal1') }}</h3>
                        <br/>
                        <br/>
                    </div>
                </div></a>
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hotel text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal2') }}</h3>
                       
                    </div>
                </div></a>
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cutlery text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal3') }}</h3>
                        
                    </div>
                </div></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-star text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal8') }}</h3>
                        <br/>
                        <br/>
                    </div>
                </div></a>
                 <a href=""><div class="col-lg-3 col-md-6 text-center">
                   <div class="service-box">
                        <i class="fa fa-4x fa-camera text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal4') }}</h3>
                        <br/>
                    </div>
                </div></a>
                <a href=""><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-calendar text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal5') }}</h3>
                        
                    </div>
                </div></a>
                <a href="trafico"><div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-automobile text-primary sr-icons"></i>
                        <h3>{{ trans('principal.principal6') }}</h3>
                        
                    </div>
                </div></a>
            </div>
        </div>
    </section>
    </header>

</body>
</html>