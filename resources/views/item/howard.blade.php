@extends('layouts.submaster')

@section('content')

    <!-- Page Content -->
    <div class="container" style="margin-top:100px;">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">I'm not poor
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
              <img class="img-fluid" src="img/human/hawardmap.png"   alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 만들기</h4>
              <p class="text-muted">Make creations</p>
            </div>

		  </div>
        <div class="col-md-4">
          <h3 class="">Description</h3>
          <p class="text-info">다른 사람들보다 더 세심하되 지혜롭게 생각하라, 다른 사람들보다 더 모험을 하되 안전을 생각하라, 다른 사람들보다 더 많은 꿈을 꾸되 현실적으로 생각하라
, 다른 사람들보다 더 기대하되 가능성을 생각하라, 여기에 그의 비지니스 철학, 인생철학이 고스란이 들어있다.</p>
          <h3 class="">SCHULTZ gram</h3>
          <p class="text-info">#스타벅스 키워 주세요~ 내가 #거지라고? 난 나만의 #자신감이 넘쳐 SWAGGER
내 안의 평화 #INNERPEACE</p>
        </div>

      </div>

      <!-- /.row -->

       <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 bg-dark text-center">
        <div class="card-body">
          <p class="m-1">가장 중요한 것은 마음이고 의지가 결국 현실을 만들 수 있다. -Howard Schultz</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">LAMBORGHINI WITH A BOY</h2>
              <p>람보르기니(슈퍼카)의 만남이 소년의 인생을 바꿔 놓다! 그가 선택한 길과 그 결과는 어떻게 되었을까?</p>
            </div>
            <div class="card-footer">
              <a href="demarco" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Subconsious <br> &nbsp</h2>
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
              <h2 class="card-title">MAD MAN <br> &nbsp</h2>
              <p class="card-text">가난한게 내 인생에 도움을 주진 않지만 방해도 하지 않아!
남들이 뭐라고 하던 나는 상관없어. </p>
            </div>
            <div class="card-footer">
              <a href="madman" class="btn btn-primary">보러 가기</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

      
      	<img class="img-fluid d-block mx-auto img-thumbnail" src="img/human/hawardchar.png" alt="">
	
    <div class="card-link" style="text-align: right; margin: 20px;">
             <a href="persent2" class="btn btn-primary">1% 분석 보기</a>
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
                   <h2>Howard Schultz</h2>
                   <p class="item-intro text-muted">Challenging, Thinking, Dreams come true</p>
                   <img class="img-fluid d-block mx-auto" src="img/human/hawardreal.png" alt="">
                   <div class= "p-left">
                   <p> 빈민가에서 태어나 중졸의 학력의 아버지 아래서 가난과 맞서 싸워야 했다. 아버지가 돌아가시고 나서 아버지는 사회에 적응하려고 애썼지만 결국 사회에 버림을 받은 것이었음을 알았다.</p>
                 </br>
                 <p>우연히 스타벅스의 커피맛과 경영방식에 반해 1982년 대기업 부회장의 자리를 박차고 당시 오직 4개의 매장을 갖고 있었던 작은 커피 회사 스타벅스에 마케팅 책임자로 합류한다.</p>
               </br>
               <p>1992년 스타벅스를 스페셜티 커피 회사로서는최초의 상장기업으로 만들었고 현재 2000여 스토어를 갖고있는 세계 최고의 커피 브랜드로 성공시켰다.</p>

            </div>
                   <ul class="list-inline">
                     <li>Client: JOO</li>
                     <li>Category: Enterpreneur</li>
                     <li>Origin: 스타벅스 커피 한잔의 힘</li>
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