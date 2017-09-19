<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-106745347-1');
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-106745347-1', 'auto');
      ga('send', 'pageview');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inova Direito | Sua fonte online de conteúdo grátis</title>
    <link href="{{ secure_asset("/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ secure_asset("/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{ secure_asset("css/clean-blog.min.css") }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="{!! secure_asset('img/ICONE-PEQUENO.png') !!}"/>
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/inovadireito/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x" style="color: #001441;"></i>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://twitter.com/inova_direito" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x" style="color: #001441;"></i>
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.linkedin.com/company/18251735/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x" style="color: #001441;"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="background-image: url('/img/cover_site-01.png'); height: 10%;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <img src="{!! secure_asset('/img/MARCA-SITE.png') !!}">
              <span class="subheading">Sua fonte online de conteúdo grátis</span>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                  <br>
                  @if (count($errors) > 0)
                       <div class="alert alert-danger">
                            <ul style="font-size:13px">
                            @foreach($errors->all() as $error)
                                <li><font style="font-size: 15px;">{{$error}}</font></li>
                            @endforeach
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </ul>
                        </div>
                  @endif
                  @if((old('nome')) && (count($errors) <= 0))
                     <div class="alert alert-success">
                         <b style="font-size: 15px;">Você foi cadastrado com sucesso!
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     </div>
                 @endif
                </div>
                <div class="col-md-2">

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">

        @yield('conteudo')

      </div>
    </div>

    <br>
    <div class="footer-bottom">
	     <div class="container-fluid">
         <div class="row text-center" style="background-color: #001441;">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="copyright">
               <font class="text-center subheading" style="color: white; font-size: 14px;">© 2017, #Modo_beta, All rights reserved</font>
             </div>
			     </div>
		    </div>
	    </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ secure_asset("vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ secure_asset("vendor/popper/popper.min.js") }}"></script>
    <script src="{{ secure_asset("vendor/bootstrap/js/bootstrap.min.js") }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ secure_asset("js/clean-blog.min.js") }}"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106745347-1"></script>




  </body>

</html>
