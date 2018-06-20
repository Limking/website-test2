@extends('comming.commaster')

@section('content')

<main role="main" id="main">
  <div class="container">

    <!-- tab-content -->

    <div class="tab-content">

      <!-- Home -->

      <section id="home" class="tab-pane fade in active">
        <article class="home-content">
          <header role="home-title">
            <h2>This is
              <div id="typed-strings"><span>Your Business</span> <span>Basic</span> <span>Starting here</span>
               <span>Just do it</span> </div>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery-lean.min.js" type="text/javascript"></script>

<!-- custom -->

<script src="js/custom-lean.js" type="text/javascript"></script>
<script src="js/nav-custom-lean.js" type="text/javascript"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min-lean.js" type="text/javascript"></script>

<!-- jquery.countdown -->

<script src="js/countdown-js-bs-basic.js" type="text/javascript"></script>
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

@endsection