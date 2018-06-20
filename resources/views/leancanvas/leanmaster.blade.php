@extends('layouts.submaster')


@section('content')
<!-- Header with Background Image -->
    <header >
      <img class="img-fluid" src="img/lean-bg/leancanvas-bg.png"  style="width=100%; "  >

    </header>


    <!-- Page Content -->
    <section id="portfolio" class="bg-light">
      <div id="services" class="container">
        <div class="row" style ="height: 100px">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"></h>Process</h2>
            <h3 class="section-subheading text-muted">Just do it. Templet!</h3>
          </div>
        </div>
        <div class="row" style= "margin-top: 30px">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="problem">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid"  src="img/lean/problem-1.png" style="width:100%" >

            </a>
            <div class="portfolio-caption">
              <h4>문제</h4>
              <p class="text-muted">Problem</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="customer">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/customer-segments-2.png" style="width:100%"  alt="">
            </a>
            <div class="portfolio-caption">
              <h4>수요고객층</h4>
              <p class="text-muted">Customer Segments</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="unique">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/Unique-Value-3.png" style="width:100%"  alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 희소가치</h4>
              <p class="text-muted">Unique Value</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="solution">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/solution-4.png" style="width:100%"  alt="">
            </a>
            <div class="portfolio-caption">
              <h4>해결방법</h4>
              <p class="text-muted">Solution</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="unfair">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/unfair-advantage-5.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>불리한 요소</h4>
              <p class="text-muted">Unfair Advantage</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="revenue">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/revenue-streams-6.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>수익 창출 모델</h4>
              <p class="text-muted">Revenue Streams</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="cost">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/cost-structure-7.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>지출 목록</h4>
              <p class="text-muted">Cost Structure</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="key">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/key-metrics-8.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>아이템 키포인트</h4>
              <p class="text-muted">Key Metrics</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="channels">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lean/channels-9.png" style="width:100%" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>유통 채널</h4>
              <p class="text-muted">Channels</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /.container -->

    @endsection