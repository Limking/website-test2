<!DOCTYPE html5>

<html lang="en">

  <head>

    <meta charset="utf-8">

 <meta name="description" content="">
    <meta name="author" content="">

    <title>Templet</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->

    <link href="css/agency.min.css" rel="stylesheet">


  <style>
    #Talk {
      align-content: center;
    }

    #mainsg {
      text-align: left;

    }

  .container {
     width: 75%;
  max-width: none !important;
    }
      .container-main {
     width: 100%;
  max-width: none !important;
    }

    </style>
  </head>

  <body>


    @include ('layouts.nav')

    @yield('content')

    @include('layouts.footer')



    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
  </body>

</html>
