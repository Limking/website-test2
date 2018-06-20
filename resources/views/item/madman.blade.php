@extends('layouts.submaster')

@section('content')

   <!-- Page Content -->
    <div class="container" style="margin-top:100px;">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Mad Man
        <small></small>
      </h1>

      <!-- Portfolio Item Row -->

      <div class="row" id="portfolio">



          <div class="col-md-8 portfolio-item" >
            <a class="portfolio-link"  href="#portfolioModal1" data-toggle="modal" style="max-width:700px;">
              <div class="portfolio-hover" >
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/human/steve-jobs.png"   alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 만들기</h4>
              <p class="text-muted">Make creations</p>
            </div>

		  </div>
        <div class="col-md-4">
          <h3 class="">Description</h3>
          <p class="text-info">자신의 사상을 곧대로 받아들이는 스티브의 행동은 많은 사람들을 놀라게 했지만 하나에 미친 결과 끝내 자신의 신념을 이루었다.</p>
          <h3 class="">STEVE JOBS gram</h3>
          <p class="text-info">니들이 #미친놈이 어떤지 알아? 나는 #전자공학에 미친놈이자 #아이폰의 창시자인 스티브다!</p>
        </div>

      </div>

      <!-- /.row -->

       <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 bg-dark text-center">
        <div class="card-body">
          <p class="m-1"> 미친사람들은 세상을 바꾼다. -STEVE JOBS</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
         <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Subconsious</h2>
              <p class="card-text">다 끝났다고 생각된 그 순간! 그에게 찾아온 절실함과 잠재력이 터지다! <br> &nbsp</p>
            </div>
            <div class="card-footer">
              <a href="inamori" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>

        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">MORON</h2>
              <p class="card-text">저능아 판정까지 받았던 아이는 '실험'이라는 1가지에 빠졌는데.. 그 결과는 어디까지 미치는 것 일까?!</p>
            </div>
            <div class="card-footer">
              <a href="moron" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

         <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">THE FATHER OF A VEHICLES</h2>
              <p class="card-text">고집불통 학생이 어떻게 행동하는지 보여주는 교과서적인 삶!</p>
            </div>
            <div class="card-footer">
              <a href="vehicles" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      
      	<img class="img-fluid d-block mx-auto img-thumbnail" src="img/human/Steve-Jobs-char.png" alt="">
		
   <div class="card-link" style="text-align: right; margin: 20px;">
             <a href="persent4" class="btn btn-primary">1% 분석 보기</a>
         </div>
    </div>
    <!-- /.container -->
     <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>STEVE-JOBS</h2>
                  <p class="item-intro text-muted">Mad Man</p>
                  <img class="img-fluid d-block mx-auto" src="img/human/steve-jobs.png" alt="">
                  <div class= "p-left">
                  <p> 1976년 스티브 워즈니악, 로널드 웨인과 함께 애플을 공동 창업하고, 애플 2를 통해 개인용 컴퓨터를 대중화했다.</p>
                </br>
                <p>1985년 경영분쟁에 의해 애플에서 나온 이후 NeXT 컴퓨터를 창업하여 새로운 개념의 운영 체제를 개발했다. 1996년 애플이 NeXT를 인수하게 되면서 다시 애플로 돌아오게 되었고 1997년에는 임시 CEO로 애플을 다시 이끌게 되었으며 이후 다시금 애플을 혁신해 시장에서 성공을 거두게 이끌었다.</p>
              </br>
              <p>2001년 아이팟을 출시하여 음악 산업 전체를 뒤바꾸어 놓았다. 또한, 2007년 아이폰 을 출시하면서 스마트폰 시장을 바꾸어 놓았고 2010년 아이패드를 출시함으로써 포스트PC 시대를 열었다.</p>
            </div>
                  <ul class="list-inline">
                    <li>Client: JAMESE</li>
                    <li>Category: Visionary</li>
                    <li>Origin: 스티브 잡스</li>
                  </ul>
                  <button class="btn btn-primary" style="margin-top:50px;" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection