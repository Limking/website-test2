@extends('layouts.submaster')

@section('content')
 <!-- Page Content -->
    <div class="container" style="margin-top:100px;">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Subconscious
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
              <img class="img-fluid" src="img/human/inamori-kazuo.png"   alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 만들기</h4>
              <p class="text-muted">Make creations</p>
            </div>

		  </div>
        <div class="col-md-4">
          <h3 class="">Description</h3>
          <p class="text-info">어떤 곤경에 처한 기업이라도 투혼이 넘치는 리더를 중심으로 전 직원이 강하고 순수한 마음으로 끝없이 노력하고 새로운 방법과 수단을 모색해간다면 난관을 극복하고 발전할 수 있다.</p>
          <h3 class="">inamori gram</h3>
          <p class="text-info">인생의 #끝은 내가 만들어 가는 것. #경영자철학을 가지고 살아간다면 나의 #잠재의식을 깨울 수 있다!!</p>
        </div>

      </div>

      <!-- /.row -->

       <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 bg-dark text-center">
        <div class="card-body">
          <p class="m-1"> 끊임 없는 열망은 끝내 나의 잠재의식을 깨운다. -INAMORI KAZUO</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">I'm not poor</h2>
              <p class="card-text">빈민가에서 태어난 소년의 당돌한 가출! 그는 무엇에 매혹되었을까? 최종적으로 선택한 그의 모습은 빈민가의 소년에서 어떻게 바뀌었을까?</p>
            </div>
            <div class="card-footer">
              <a href="howard" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">MAD MAN</h2>
              <p class="card-text">가난한게 내 인생에 도움을 주진 않지만 방해도 하지 않아!
남들이 뭐라고 하던 나는 상관없어. </p>
            </div>
            <div class="card-footer">
              <a href="madman" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">MOROM</h2>
              <p class="card-text">저능아 판정까지 받았던 아이는 '실험'이라는 1가지에 빠졌는데.. 그 결과는 어디까지 미치는 것 일까?! </p>
            </div>
            <div class="card-footer">
              <a href="moron" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

      	<img class="img-fluid d-block mx-auto img-thumbnail" src="img/human/inamorichar.png" alt="">
		
   
   <div class="card-link" style="text-align: right; margin: 20px;">
             <a href="persent3" class="btn btn-primary">1% 분석 보기</a>
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
                  <h2>INAMORI-KAZUO</h2>
                  <p class="item-intro text-muted">Realize your self-subconsciousness</p>
                  <img class="img-fluid d-block mx-auto" src="img/human/inamorireal.png" alt="">
                  <div class= "p-left">
                  <p> 일본 교세라 창업자이자 명예회장. 세계적인 기업가며 일본에서 가장 존경받는 경영자 중 한 사람으로 ‘살아 있는 경영의 신’으로 불린다. 한국인이 가장 좋아하는 일본 기업인이다.</p>
                </br>
                <p>교세라와 KDDI를 창립한 후 회장을 거쳐 명예회장을 맡고 있으며, 2010년 위기에 빠진 일본항공(JAL) 회장으로 취임해 성공적으로 회생시켰다.</p>
              </br>
              <p>경영철학과 회계 원칙이 접목된 전설의 경영관리 시스템, 아메바 경영. 저자는 아메바 경영을 창안하고 여러 시행착오와 경험을 통해 시스템을 진화시켜왔다.</p>
            </div>
                  <ul class="list-inline">
                    <li>Client: JUN</li>
                    <li>Category: Enterpreneur</li>
                    <li>Origin: 카르마 경영</li>
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