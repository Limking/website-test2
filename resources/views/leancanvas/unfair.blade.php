<!DOCTYPE HTML>

<html>
<head>

<meta charset="utf-8">

<!-- Description, Keywords and Author -->

<meta name="description" content="">
<meta name="author" content="">
<title>Opening</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<!-- style -->

<link href="css/style-lean.css" rel="stylesheet">

<!-- style -->

<!-- bootstrap -->

<link href="css/bootstrap-lean.min.css" rel="stylesheet">

<!-- responsive -->

<link href="css/responsive-lean.css" rel="stylesheet">

<!-- font-awesome -->

<link href="css/font-awesome-lean.min.css" rel="stylesheet">

<!-- font-awesome -->

<style>
.container {
  width: 980px;
  max-width: none !important;
}


	  </style>

</head>

<body style="background-image: url(images/lean-bg/lean-unfair.jpg);">

<!-- side bar -->


<!-- side bar -->

<!-- header -->

<header role="main-header">
  <div class="container">

    <!-- logo -->

    <h1> <a href="/" title="opening" style="color:#fed136; text-decoration:none">Templet</h1>

    <!-- logo -->

    <!-- socil Icon -->

      <ul role="socil-icons">
      <li><a href="https://twitter.com/KoreaTemplet" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="https://www.facebook.com/KoreaTemplet/" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCEd5dXG89sKdpIF7H_9IKUw" target="_blank" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</header>

<!-- header -->

<!-- main -->

<main role="main" id="main">
  <div class="container">

    <!-- tab-content -->

    <div class="tab-content">

      <!-- Home -->

      <section id="home" class="tab-pane fade in active">
        <article class="home-content">
          <header role="home-title">
            <h2>This is
              <div id="typed-strings"><span>Unfair Advantage</span> <span>Leancanvas</span> <span>Your business</span> <span>Starting here</span> </div>
              <span id="typed" style="white-space:pre;"></span></h2>
          </header>
          <p>We're sorry, our website is now under construction. We are working<br/>
            hard to deliver you a great viewing experience!
          <p>
        </article>
        <div id="countdown"></div>
      </section>

      <!-- Home -->



      <!-- Newsletter Subscribtion -->


      <!-- Newsletter Subscribtion -->

      <!-- Contact -->


      <!-- Contact -->

    </div>

    <!-- tab-content -->

  </div>
</main>

<!-- main -->

<!-- footer -->

<footer role="footer">
  <div class="container">
    <p>&copy; All rights reserved. YEOLDA.CO 2017</p>
    <p>Business with<i class="fa fa-heart" aria-hidden="true"></i>by <a href="contact.html">Templet</a></p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery-lean.min.js" type="text/javascript"></script>

<!-- custom -->

<script src="js/custom-lean.js" type="text/javascript"></script>
<script src="js/nav-custom-lean.js" type="text/javascript"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min-lean.js" type="text/javascript"></script>

<!-- jquery.countdown -->

<script src="js/countdown-js-lean-unfair.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-lean.contact.js"></script>
<script src="js/html5shiv-lean.js" type="text/javascript"></script>

<!-- Typed jS -->

<script src="js/typed-lean.js" type="text/javascript"></script>
<script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 100,
            backDelay: 1000,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
</body>
</html>
