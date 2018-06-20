@extends('layouts.submaster')

@section('content')    
    
    <!-- Page Content -->
    <div class="container" style= "margin-top: 100px">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Step 1</h1>
          <div class="list-group">
            <a href="item" class="list-group-item bg-dark"><strong>돈 벌고 싶냐 ?</strong></a>
            <a href="persent" class="list-group-item"><strong>1% 분석</strong></a>
            <a href="shovel" class="list-group-item"><strong>첫 삽 푸기 !</strong></a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9" style="width: 1250px;">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <a href="demarco"><img class="d-block img-fluid" src="img/banner/b-1.png" style="width: 100%;" alt="First slide"></a>
              </div>
              <div class="carousel-item">
                <a href="leancanvas"><img class="d-block img-fluid" src="img/banner/b-2.png"   style="width: 100%;"alt="Second slide">
              </a></div>
              <div class="carousel-item">
                <a href="bslist"><img class="d-block img-fluid" src="img/banner/b-3.png"  style="width: 100%;" alt="Third slide"></a>
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

         
          
            <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="demarco"style="height:170px;">
            <img class="card-img-top" src="img/human/demarcolist.png"style="height:170px;" alt=""></a>
          </a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="demarco">Lamborghini with a boy</a>
                  </h4>
                  <h5>$1,000,000,000</h5>
              <p class="card-text">람보르기니를 본 소년의 인생 터닝 포인트! 그는 어떻게 역경을 딛고 다시 일어섰는가? </p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733;</small>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="howard" style="height:170px;">
            <img class="card-img-top" src="img/human/hawardlist.png" style="height:170px;" alt=""></a>
          </a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title" href="howard">I'm not poor <br> &nbsp </a>
                  </h4>
                  <h5>$829,000,000</h5>
              <p class="card-text">빈민가에서 생긴 기적같은 이야기, 가난한 소년이 다짐한 끝이 없는 도전의 결과는? </p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733; &#9734; </small>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="inamori" style="height:170px;">
            <img class="card-img-top" src="img/human/inamorilist.png" style="height:170px;" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title"  href="inamori">Subconscious <br> &nbsp</a>
                  </h4>
                  <h5>$2,250,000,000</h5>
              <p class="card-text">극심한 취업난 속에 피어난 인생의 원리! 청년의 마지막 지푸라기는 무엇이었을까?</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733; &#9733;</small>
            </div>
          </div>
        </div>
         <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="madman" style="height:170px;">
            <img class="card-img-top" src="img/human/madman.png" style="height:170px;" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title"  href="madman">Mad Man <br> &nbsp</a>
                  </h4>
                  <h5>$114,000,000</h5>
              <p class="card-text">미친놈 소리를 들어가며 자신의 삶을 고집한 소년은 누구인가? <br> &nbsp</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733; &#9733;  &#9733;</small>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="moron" style="height:170px;">
            <img class="card-img-top" src="img/human/moron.png" style="height:170px;" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title"  href="moron">MORON <br> &nbsp</a>
                  </h4>
                  <h5>$890,000,000</h5>
              <p class="card-text">저능아 라는 소리까지 들었다.. 하지만 내 머릿속엔 무한한 상상의 세계가 펼쳐져 있었다!</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733; &#9733;  &#9734;</small>
            </div>
          </div>
        </div>
         <div class="col-md-4 mb-4">
          <div class="card h-100"><a href="vehicle" style="height:170px;"> 
            <img class="card-img-top" src="img/human/hen.png" style="height:170px;" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                    <a class="card-title"  href="vehicle">The father of a vehicles </a>
                  </h4>
                  <h5>$35,244,200,000</h5>
              <p class="card-text">고집불통같은 성격은 아무도 못 말렸지만 끝내 단 한가지를 이루게 되었는데.. <br> &nbsp</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">&#9733; &#9733;  &#9734;</small>
            </div>
          </div>
        </div>
          
    </div>
     



        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->


</div>
   @endsection


