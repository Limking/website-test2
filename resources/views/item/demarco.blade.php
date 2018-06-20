 @extends('layouts.submaster')

@section('content')
  <!-- Page Content -->
    <div class="container" style="margin-top:100px;">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Lamborghini with a boy
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
              <img class="img-fluid" src="img/human/mj-demarco.png"   alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 만들기</h4>
              <p class="text-muted">Make creations</p>
            </div>

		  </div>
        <div class="col-md-4">
          <h3 class="">Description</h3>
          <p class="text-info">어린 학생 드마코는 길거리에서 우연히 람보르기니를 만나게 되고, <strong>'인생의 추월차선'</strong>이 존재한다는 것을 깨닫게 된다. 그리하여 드마코는 '추월차선'을 찾기위한 모험을 시작하기로 한다. 하지만 연이은 실패와 거기에 더한 우울증으로 고독한 나날을 보내게 되는데...</p>
          <h3 class="">demarco gram</h3>
          <p class="text-info">인생은 #추월차선이 있다. #람보르기니타고슝슝. #우울증 #극복~♥ 나는 지금 돈 많아 <br>#빌리어네어 #리치 #부자 #드마코그램</p>
        </div>

      </div>

      <!-- /.row -->

       <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 bg-dark text-center">
        <div class="card-body">
          <p class="m-1">내 인생은 내 스스로가 통제하고 선택해야 한다. -MJ.DEMARCO</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">I'm not poor</h2>
              <p class="card-text">빈민가에서 태어난 소년의 당돌한 가출! 그는 무엇에 매혹되었을까? 최종적으로 선택한 그의 모습은 빈민가의 소년에서 어떻게 바뀌었을까? </p>
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
              <h2 class="card-title">Subconsious</h2>
              <p class="card-text">다 끝났다고 생각된 그 순간! 그에게 찾아온 절실함과 잠재력이 터지다!<br> &nbsp </p>
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
              <h2 class="card-title">MAD MAN</h2>
              <p class="card-text">가난한게 내 인생에 도움을 주진 않지만 방해도 하지 않아!
남들이 뭐라고 하던 나는 상관없어.<br> &nbsp  </p>
            </div>
            <div class="card-footer">
              <a href="madman" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

      	<img class="img-fluid d-block mx-auto img-thumbnail" src="img/human/demarcochar.png" alt="">
	
   
  	<div class="card-link" style="text-align: right; margin: 20px;">
             <a href="persent1" class="btn btn-primary">1% 분석 보기</a>
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
                  <h2>MJ DEMARCO</h2>
                  <p class="item-intro text-muted">You need to control you by yourself</p>
                  <img class="img-fluid d-block mx-auto" src="img/human/mj-demarco1.png" alt="">
                  <div class= "p-left">
                <p>그는 죽도록 일해서 돈을 벌고, 아끼고, 모으는 것만으로는 절대 젊어서 부자가 될 수 없다고 말한다. 불과 몇 년 전까지만 해도 그는 청소 일을 하며 근근이 어머니를 부양했고, 허황된 꿈을 좇는다며 주변의 손가락질을 받았다.</p>
              </br>
              <p>그럼에도 불구하고 그는 부자가 되는 특별한 공식 즉, 추월차선 법칙을 발견했고, 단시간 내에 수백억대의 자산가가 되었다.</p>
            </br>
            <p>그는 지금 아름다운 애리조나 주 피닉스에 살면서 자동차, 여행, 미식, 글쓰기, 피트니스, 람보르기니 동호회 활동 등 추월차선식 경제적 자유를 열정적으로 즐기며 살고 있다.</p>
          </div>
                  <ul class="list-inline">
                    <li>Client: JUN</li>
                    <li>Category: Enterpreneur</li>
                    <li>Origin: 부의 추월차선</li>
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