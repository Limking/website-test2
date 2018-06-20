@extends('layouts.master')


@section ('content')
 <!-- Header -->
    <header class="masthead" style="height: 950px;" >



        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Templet!</div>
          <div class="intro-heading">
            <p> build your world</p>
          </div>
          <a class="portfolio-link btn-xl"  href="#portfolioModal1" data-toggle="modal" href="#portfolioModal1">첫 단추</a>
        </div>


    </header>

    <!-- Services -->
    <section id="services" style ="margin-top :-100px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center" style="margin-top: 70px;">
            <h2 class="section-heading">Templet</h2>
            <h3 class="section-subheading text-muted"><strong>T</strong>o make own <strong>E</strong>cono<strong>M</strong>ic <strong>P</strong>laying! <strong>LET</strong>'s start.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x" style= "height: auto;" >
             <img src ="img/portfolio/whyman2.png">

            </span>
            <h4 class="service-heading" style="text-emphasis-color: yellowgreen">Get-into Trouble</h4>

            <p class="text-muted " style="text-align: center; ">눈앞의 벽에 부딪친 당신,<br>
해결방법을 찾으시나요?
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x" style ="height: auto ">
             <img src ="img/portfolio/pigman2.png" >

            </span>
            <h4 class="service-heading">Have a Teaching</h4>
            <p class="text-muted " style="padding-left: 10px;text-align: center;  ">템플렛이 전달하는 단 하나,<br>
‘자기주도적 해결 방법’
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x" style= "height: auto">
            <img src ="img/portfolio/bman2.png" >

            </span>
            <h4 class="service-heading">Take your purpose</h4>
            <p class="text-muted " style="padding-left: 10ㅅㄷㅁpx;text-align: center;  ">당신만의 해결 방법를 통해,<br>
'성공'이 가까워질 것입니다.
</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container"style="margin-top: 30px;">
        <div class="row" style ="height: 100px">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Service</h></h2>
            <h3 class="section-subheading text-muted">Build Your World. Templet!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="itemlist.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/item4.png"  style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 만들기</h4>
              <p class="text-muted">Make creations</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="leancanvas.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/leancavas.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>린 캔버스</h4>
              <p class="text-muted">Leancanvas</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="bslist.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/bs3.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>사업화</h4>
              <p class="text-muted">Commercialize</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="bsmarketing.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/mk2.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>마케팅</h4>
              <p class="text-muted">Marketing</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="faq1.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/nt3.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>공지사항</h4>
              <p class="text-muted">Notice</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="contact.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/ct2.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>문의</h4>
              <p class="text-muted">Contact</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center ">
            <h2 class="section-heading">Step</h2>
            <h3 class="section-subheading text-muted">How to make a business?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image"><a href="itemlist.html">
                  <img class="rounded-circle img-fluid" src="img/about/step1.png" alt="">
                </div>
                </a>
                <div class="timeline-panel" style="width: 43%">
                  <div class="timeline-heading">
                    <h4>step 1</h4>
                    <h4 class="subheading">아이템 만들기 </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-size: 0.9rem;">당신의 아이디어는 어떻게 탄생할까요?<br>
아이디어 만들기는 어떻게 시작할까요?<br>
당신이 궁금해 하는 시작의 모든 것을<br>
“아이템 만들기”에서 알려드립니다</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted"><a href="leancanvas.html">
                <div class="timeline-image">
                 <img class="rounded-circle img-fluid" src="img/about/step2.png" alt="">
                </div>
          </a>
                <div class="timeline-panel" style="width: 43%">
                  <div class="timeline-heading">
                    <h4>Step 2</h4>
                    <h4 class="subheading">린 캔버스</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-size: 0.9rem;">당신만의 아이디어가 생겼다면,<br>
그것을 키울 수 있는 방법이 있습니다!<br>
당신의 생각이 구체화되고 현실화되는<br>
그림을 템플렛이 함께 그려드립니다</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image"><a href="bslist.html">
                  <img class="rounded-circle img-fluid" src="img/about/step3.png" alt="">
                </div>
                </a>
                <div class="timeline-panel" style="width: 43%">
                  <div class="timeline-heading">
                    <h4>Step 3</h4>
                    <h4 class="subheading">사업화</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-size: 0.9rem;">당신의 생각을 세상에 선보이고 싶다구요?<br>
나만의 비즈니스를 만들어 보고 싶다구요?<br>
처음부터 끝까지 템플렛과 함께 해보세요<br>
당신의 꿈을 끝까지 지켜드리겠습니다</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image"><a href="bsmarketing.html">
                  <img class="rounded-circle img-fluid" src="img/about/step4.png" alt="">
                </div>
                </a>
                <div class="timeline-panel" style="width: 43%">
                  <div class="timeline-heading">
                    <h4>step 4</h4>
                    <h4 class="subheading">마케팅</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted" style="font-size: 0.9rem;">당신의 비즈니스를 더 큰 세상으로!<br>
고객의 소리에 귀를 기울여 보세요<br>
마케팅은 ‘판매’만을 위한 방법이 아닙니다<br>
진정한 마케팅은 당신의 ‘가치 전달’입니다</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image" style="padding-top: 21px;">
                  <h4><a class ="section-subheading" href="itemlist.html" style ="text-decoration: none; color:white; ">let's play</a></h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">marketing resources</h2>
            <h3 class="section-subheading text-muted">How to make a Marketing plan ?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/target.png" alt="">
              <h4>1. First Target </h4>
              <p class="text-muted">첫번째 사용자, 메인 고객층</p>
            <button type="button" class="btn btn-default btn-circle btn-xl " style="border-radius: 60px;padding: 18px 20px; border-color: #fec503;"><i class="fa fa-check"></i>
                            </button>

            </div>

          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/ms1.png" alt="">
              <h4>2. Market Size</h4>
              <p class="text-muted">메인 고객층의 시장 크기</p>
              <button type="button" class="btn btn-default btn-circle btn-xl" style="border-radius: 60px;padding: 18px 20px; border-color: #fec503;"><i class="fa fa-check"></i>
                            </button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/iyou2.png" alt="">
              <h4>3. Competior</h4>
              <p class="text-muted">경쟁자</p>
              <button type="button" class="btn btn-default btn-circle btn-xl" style="border-radius: 60px;padding: 18px 20px;border-color: #fec503;"><i class="fa fa-check"></i>
                            </button>
            </div>
          </div>
        </div>
        <div class="row">

        </div>
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body" style="background-color:#999966;" >
          <p class="text-white m-0">마케팅이란 당신이 가지고 있는 ‘가치’를 상대방에게 '어떻게' 전달할 수 있는가?</p>
        </div>
      </div>
      </div>
    </section>



    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
            <h3 class="section-subheading text-muted">Hello my friends ! Nice to meet you !</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
          <div class ="text-center">
          <a href="http://pf.kakao.com/_xhxkrFxl">
          <img class="img-fluid d-block mx-auto"  src="img/plus3.png" alt="">
        </a>

          </div>
        </div>

    </div>
    </div>
    </section>

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
              <div class="mx-auto">
                <div class="modal-body" style=" max-height: 6500px; ">
                  <!-- Project Details Go Here -->


                  <img class="img-fluid d-block mx-auto" src="img/ex/main-modal.png" style="padding: 0px;" alt="">

                
                </div>
                <button class="btn btn-primary" data-dismiss="modal" type="button" style="margin-top: 50px;">
                    <i class="fa fa-times">Close</i>
                    </button>
              </div>
                
            </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection