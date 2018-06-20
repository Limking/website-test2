@extends('layouts.submaster')

@section('content')
 <!-- Page Content -->


   <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h1>당신은 슈퍼카를 보고 어떤 생각을 하시나요?</h1>
          <p class="text-muted">What do you think about Super Car around you?</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto" style="margin-top: 50px !important">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                     <a href="demarco"><img src="img/iphone6/iphone6-MJ-Demarco.png" class="img-fluid" style="width: 100%; height: 100%" alt=""></a>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid" style="margin-left: 50px;">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/copen-moti.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;">motivation</h2>
                    <p class="text-left text-info"  >· 부를 상징하는 람보르기니
                      <br>· 마음 속에 피어난 도전 의식</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                  <img src="img/detail/copen-hard.png" style="width:150px;margin: 15px;">
                    <h2 style="margin: 15px;">hard-ship</h2>
                    <p class="text-left text-info"  >· 수 많은 연구 실패
                      <br>· 우울증
                      <br>· 현실 도피</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-chall.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">challenge</h2>
                      <p class="text-left text-info"  >· 객관적 현실을 직시
                        <br>· 본인의 삶을 직접 설계
                        <br>· 밑바닥부터 차근차근 시작</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-result.png" style="width:150px;margin: 15px;">
                    <h2 style="margin: 15px;">result</h2>
                    <p class="text-left text-info"  >· LIMOS 대표이사</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection