@extends('layouts.submaster')

@section('content')
  <!-- Page Content -->


   <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h1>미친 사람들이 세상을 바꿀 수 있을까요?</h1>
          <p class="text-muted">Do you think people who are crazy can be able to change the world?
</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <a href="madman"><img src="img/iphone6/iphone6-_steve-jobs.png" class="img-fluid" style="width: 100%; height: 100%" alt=""></a>
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
                    <p class="text-left text-info">· 양부모의 신뢰
                    	<br>· 전자공학에 대한 무한한 집념
                    	<br>· 초대형 컴퓨터와의 만남
                    	</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                  <img src="img/detail/copen-hard.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">hard-ship</h2>
                    <p class="text-left text-info"  >· 입양되었다는 사실과 주변 시선
                      <br>· 정형화되어 있는 학교 교육
                      </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <img src="img/detail/co-chall.png" style="width:150px; margin: 15px;">
                    <h2 style="margin: 15px;">challenge</h2>
                      <p class="text-left text-info text-indent" >· 전자공학과 관련된 과목만 공부
                        <br>· 대학교 입학 후 자퇴
                        <br>· 게임 회사 프로그래밍 참여 지원
                         </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                   <img src="img/detail/co-result.png" style="width:150px; margin: 15px;" >
                    <h2 style="margin: 15px;" >result</h2>
                    <p class="text-left text-info" >· Apple 설립
                    <br>. Apple의 i 시리즈 모든 제품 설계</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection