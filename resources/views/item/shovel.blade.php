@extends('layouts.submaster')

@section('content')
    <!-- Page Content -->
    <div class="container" style= "margin-top: 100px">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Step 1</h1>
          <div class="list-group">
            <a href="item" class="list-group-item"><strong>돈 벌고 싶냐 ?</strong></a>
            <a href="persent" class="list-group-item "><strong>1% 분석</strong></a>
            <a href="shovel" class="list-group-item bg-dark"><strong>첫 삽 푸기 !</strong></a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <a href="bslist"><img class="d-block img-fluid" src="img/banner/b-3.png" style="width:100%" alt="First slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href="leancanvas><img class="d-block img-fluid" src="img/banner/b-2.png" style="width:100%" alt="Second slide">
          </a>
              </div>
              <div class="carousel-item">
                <a href="demarco"><img class="d-block img-fluid" src="img/banner/b-1.png" style="width:100%" alt="Third slide"></a>
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

<hr style="border-color: #cccccc;">
              <!--row-->
          <div class="row" style="padding-top: 20px;">
          <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="episode1" style="height:170px;">
            <img class="card-img-top" src="img/shovel/shovel.png" style="height:170px;" alt="">
            </a>
            <div class="card-body">

              <h5>Episode 1.</h5>
              <p class="card-text">일상생활에서의 불편함.</p>
            </div>
            <div class="card-footer">
              <a href="shoveldetail.html" class="btn btn-primary">읽어 보기</a>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="episode2" style="height:170px;">
            <img class="card-img-top" src="img/shovel/shovel1.png" style="height:170px;" alt="">
            </a>
            <div class="card-body">

                  <h5>Episode 2.</h5>
              <p class="card-text">사물과의 연결고리 - 동심편</p>
            </div>
            <div class="card-footer">
            <a href="shoveldetail1.html" class="btn btn-primary">읽어 보기</a>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="episode3" style="height:170px;">
            <img class="card-img-top" src="img/shovel/shovel2.png"  style="height:170px;"alt="">
            </a>
            <div class="card-body">

                  <h5>Episode 3.</h5>
              <p class="card-text">위기 속에서 핀 꽃</p>
            </div>
            <div class="card-footer">
             <a href="shoveldetail2.html" class="btn btn-primary">읽어 보기</a>
            </div>
          </div>
          </div>

           <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="episode4" style="height:170px;">
            <img class="card-img-top" src="img/shovel/shovel3.png"  style="height:170px;"alt="">
            </a>
            <div class="card-body">

                  <h5>Episode 4.</h5>
              <p class="card-text">1+1=∞</p>
            </div>
            <div class="card-footer">
             <a href="shoveldetail3.html" class="btn btn-primary">읽어 보기</a>
            </div>
          </div>
          </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection