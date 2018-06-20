@extends('layouts.submaster')

@section('content')
    <!-- Page Content -->
    <div class="container" style= "margin-top: 100px">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Step 1</h1>
          <div class="list-group">
            <a href="item" class="list-group-item"><strong>돈 벌고 싶냐 ?</strong></a>
            <a href="persent" class="list-group-item bg-dark"><strong>1% 분석</strong></a>
            <a href="shovel" class="list-group-item"><strong>첫 삽 푸기 !</strong></a>
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
                <a href="leancanvas"><img class="d-block img-fluid" src="img/banner/b-2.png" style="width:100%" alt="First slide">
				  </a>
              </div>
              <div class="carousel-item">
                <a href="bslist"><img class="d-block img-fluid" src="img/banner/b-3.png" style="width:100%" alt="Second slide">
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

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="persent1" style="height:170px;">
            <img class="card-img-top" src="img/human/mj-demarco.png" style="height:170px;" alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="persent1">MJ Demarco</a>
                  </h4>
              <h5>추월차선</h5>
              <p class="card-text">1% 분석 : 내 인생은 내가 통제 하는 것. <br> &nbsp </p>
            </div>
            <div class="card-footer">
              <a href="persent1" class="btn btn-primary">분석 보기</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="persent2" style="height:170px;">
            <img class="card-img-top" src="img/human/hawardmap.png" style="height:170px;" alt="">
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="persent2">Howard Schultz</a>
                  </h4>
                  <h5>Dreams</h5>
              <p class="card-text">1% 분석 : 가장 중요한 것은 마음이고 의지가 결국 현실을 만들 수 있다. </p>
            </div>
            <div class="card-footer">
            <a href="persent2" class="btn btn-primary">분석 보기</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="persent3" style="height:170px;">
            <img class="card-img-top" src="img/human/inamori-kazuo.png" style="height:170px;" alt="">
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="persent3">Inamori Kazuo</a>
                  </h4>
                  <h5>잠재의식</h5>
              <p class="card-text">1% 분석 : 끊임 없는 열망은 끝내 나의 잠재의식을 깨운다.</p>
            </div>
            <div class="card-footer">
             <a href="persent3" class="btn btn-primary">분석 보기</a>
            </div>
          </div>
        </div>
         <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="persent4" style="height:170px;">
            <img class="card-img-top" src="img/human/steve-jobs.png" style="height:170px;" alt="">
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="persent4">Steve Jobs</a>
                  </h4>
                  <h5>MAD</h5>
              <p class="card-text">1% 분석 : 미친사람들은 세상을 바꾼다.</p>
            </div>
            <div class="card-footer">
             <a href="persent4" class="btn btn-primary">분석 보기</a>
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