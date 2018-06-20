@extends('layouts.submaster')

@section('content')
<!-- Page Content -->
    <div class="container" style= " margin-top: 100px; max-width: 1110px; margin-bottom: 50px; " >

        <!-- /.col-lg-3 -->

        <div class="col-lg-9" style="max-width: 100%;" >

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel"  >
            <ol class="carousel-indicators" style="top: 10px;" >
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/shovel/2-1.png"  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-3.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-4.png" alt="fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-5.png" alt="fifth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-6.png" alt="sixth  slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-7.png" alt="seventh slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/shovel/2-8.png" alt="eighth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>




      </div>


    </div>
    <!-- /.container -->

@endsection