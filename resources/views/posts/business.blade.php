@extends('layouts.bsmaster')

@section ('content')

<!--Carousel Wrapper-->

  <!-- Header with Background Image -->

  <!-- data-ride="carousel" -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" style="max-height: 750px;">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

     <!--Second slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/bslist/bslist1.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 100px;">


              <h6 class="mb-4">
                <strong>It is the perfect chance to start your business.</strong>
                <br><br>
                <strong>What is the best way? You want to know? Don`t hesitate, you can be succeed</strong>
              </h6>
 				<br>

              <a target="_blank" href="basic" style="color: #fff">Start free tutorial
                <i class="fa fa-power-off ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/bslist/bslist.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 100px;">
             <h6 class="mb-4">
                <strong>Templet do want to see your business how it grows up.</strong>
                <br><br>
                <strong>We give a wonderful fort, own growth engine, power</strong>
              </h6>
 				<br>

              <a href="advanced" style="color: #fff">Start free tutorial
                <i class="fa fa-power-off ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/bslist/bslist5.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn" style="margin-top: 100px;">
            <h6 class="mb-4">
                <strong>What`s your think about 'Marketing'?</strong>
                <br><br>
                <strong>It`s not simple process in business. Don`t be casual on Marketing ! Follow us, finally, you will trust us</strong>
              </h6>
 				<br>

              <a target="_blank" href="marketing" style="color: #fff">Start free tutorial
                <i class="fa fa-power-off ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->



<!--/.Carousel Wrapper-->
<br>
<!--Content-->
<div class="container" style="margin-top: 50px;">
    <div class="row">
      <!--Dynamic query listing posts from "cards" category-->
                  <!--Auto generated columnn-->
            <div class="col-sm-4" style="margin-top: 50px;">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s" >

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="./img/bslist/basic.png" class="img-fluid" style="width: 100%;" alt="">
                        <a href="basic">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block"style="background-color: #222222; text-align: center;">
                        <!--Title-->
                        <h5 class="card-title" style="color:#fff; text-align: center; margin-top: 20px;">비즈니스의 시작</h5>
                        <!--Text-->

                        <a href="basic" class="btn btn-outline-primary waves-effect" style=" margin-bottom: 10px;">BASIC</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Auto generated columnn-->
                        <!--Auto generated columnn-->
            <div class="col-sm-4"  style="margin-top: 50px;">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s" >

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="./img/bslist/advanced.png" class="img-fluid" style="width: 100%;" alt="">
                        <a href="advanced">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="background-color: #222222; text-align: center;">
                        <!--Title-->
                        <h5 class="card-title" style="color:#fff; text-align: center; margin-top: 20px;">비즈니스의 진화 </h5>
                        <!--Text-->

                        <a href="advanced" class="btn btn-outline-primary waves-effect" style=" margin-bottom: 10px;">Advenced Class</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Auto generated columnn-->
                        <!--Auto generated columnn-->
            <div class="col-sm-4" style="margin-top: 50px;">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s" >

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="./img/bslist/marketing.png" class="img-fluid" style="width: 100%;" alt="">
                        <a href="marketing">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="background-color: #222222;text-align: center;">
                        <!--Title-->
                        <h5 class="card-title" style="color:#fff; text-align: center; margin-top: 20px;">비즈니스의 완성</h5>
                        <!--Text-->

                        <a href="marketing" class="btn btn-outline-primary waves-effect " style=" margin-bottom: 10px;">Marketing Class</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Auto generated columnn-->
                <!--/.Dynamic query listing posts from "cards" category-->
</div>
</div>
<!--/.Content-->

@endsection