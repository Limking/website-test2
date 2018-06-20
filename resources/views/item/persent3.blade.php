@extends('layouts.submaster')

@section('content')

   <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h1>당신 마음속을 읽어 본 적이 있나요?</h1>
          <p class="text-muted">Have you ever read your own heart?</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <a href="inamori"><img src="img/iphone6/iphone6-Inamori.png" class="img-fluid" style="width: 100%; height: 100%" alt=""></a>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto" style="margin-top: 50px !important">
            <div class="container-fluid" style="margin-left: 50px;">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-question.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">motivation</h2>
                    <p class="text-left text-info"  >· 교토의 작은 중소기업 입사 </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                  <img src="img/detail/copen-hard.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">hard-ship</h2>
                    <p class="text-left text-info"  >· 극심한 취업난
                      <br>· 각종 시험 낙방
                      <br>· 쓰러져 가는 회사</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-chall.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">challenge</h2>
                      <p class="text-left text-info text-indent"  >· 한 가지 행동을 필사적으로 진행
                        <br>· 돈에 관한 생각을 버림
                        <br>· 자신이 쏟을 수 있는 능력을 모두
                        <br>&nbsp 사용 </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                   <img src="img/detail/co-result.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;">result</h2>
                    <p class="text-left text-info"  >· KYOCERA(교세라) 회장</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection