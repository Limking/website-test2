@extends('layouts.submaster')

@section('content')
<section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h1>아직도 당신의 삶은 빈곤한가요?</h1>
          <p class="text-muted">Do you think your life is still hungry?</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto" style="margin-top: 50px !important">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <a href="howard"> <img src="img/iphone6/iphone6-Howard.png" class="img-fluid" style="width: 100%; height: 100%" alt=""> </a>
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
                    <p class="text-left text-info" >· 빈곤한 아버지와 반대된 생각
                      <br>· 이른 나이의 독립 결심</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/copen-hard.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;">hard-ship</h2>
                    <p class="text-left text-info"  >· 빈민가의 현실타협적 생각
                      <br>· 아버지의 훈계
                      <br>· 독립 후 도시 생활의 어려움</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-chall.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;">challenge</h2>
                      <p class="text-left text-info"  >· 본인의 직관에 대한 믿음
                        <br>· 실패의식을 없앰
                        <br>· 자신의 생각을 행동으로 옮김</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                   <img src="img/detail/co-result.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;">result</h2>
                    <p class="text-left text-info"  >· STARBUCKS 대표이사</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection