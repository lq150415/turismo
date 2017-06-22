<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de informacion turistico</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
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
                <a class="navbar-brand" href="">LA PAZ - BOLIVIA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">EN</a>
                    </li>
                    <li style="font-size: 30px;">
                        |
                    </li>
                    <li>
                        <a href="">ES</a>
                    </li>
                    <li>
                        <a  href="/">Principal</a>
                    </li>
                    <li>
                        <a href="login">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-offset-2">
            
            <div class="account-wall">
                
                <form class="form-signin" method="post" action="regusu">
                @if (count($errors))
                <ul>
                    @foreach($errors->all() as $error)
           
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                @endif
                <h2 class=" "><b>Registro</b></h1>
                
                 <br/>
                 <br/>
                 <br/>
                 <div class="form-group">
                <label class="col-lg-4">Nombres :</label>
                <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="Nombres" name="nom_usu" required autofocus>
                 </div>
                 </div>
                 <br/>
                 <br/>
                 <div class="form-group">
                <label class="col-lg-4">Apellidos :</label>
                <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="Apellidos" name="ape_usu" required autofocus>
                 </div>
                 </div>
                 <br/>
                 <br/>
                 <div class="form-group">
                <label class="col-lg-4">Correo electronico :</label>
                <div class="col-lg-8">
                <input type="email" class="form-control" placeholder="Correo electronico" name="email" id="email" required autofocus>
                 </div>
                 </div>
                  <br/>
                 <br/>
                 <div class="form-group">
                <label class="col-lg-4">Password :</label>
                <div class="col-lg-8">
                <input type="password" class="form-control" placeholder="Contraseña" name="password" required autofocus>
                 </div>
                 </div>
                 <br/>
                 <br/>
                 <br/>

                <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="fa fa-sign-in"></span>
                    Enviar datos</button>
                <br/>
                <br/>
                
                -------------------------------O-----------------------------
                <br/>
                <br/>
                <button class="btn btn-lg btn-facebook btn-block" type="submit"><span class="fa fa-facebook-official"> </span>
                     Facebook</button>
                <button class="btn btn-lg btn-danger btn-block" type="submit"><span class="fa fa-google-plus-circle"></span>
                    GOOGLE +</button>
                
                </form>
            </div>
            
        </div>
    </div>
</div>
            </div> 
        </div>
    </header>
</body>
</html>