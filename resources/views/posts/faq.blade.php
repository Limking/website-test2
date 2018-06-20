@extends('layouts.submaster')

@section ('content')
    <div class="container" style = "margin-top: 130px; position: relative;">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">notice</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">공지사항</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">

       <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">UPDATE 2018-05-02 WED</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
           업데이트 내용
           <br>  
1. 린캔버스; 2편 수요고객층 
<br><br>
[정기 업데이트는 매주 목요일에 이루어집니다]
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Update 2018-04-30 MON</a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
       업데이트 내용
<br>
1. 아이템 만들기;돈 벌고 싶냐? - 'MAD MAN' 웹툰
<br> 
2. 아이템 만들기;1% 분석 - 'MAD' 1% 분석
<br>
3. 아이템 만들기;첫 삽 푸기! - Ep.4
<br><br>

[정기 업데이트는 매주 목요일에 이루어집니다]
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Update 2018-04-19 thu</a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
             Templet 이용 방법
	<br><br>
1. 아이템 만들기에 있는 이야기를 읽어본다
<br>
2. 아이디어를 만들고 싶은 생각이 든다면 LEANCANVAS로 이동한다
 <br>
* LEANCAMVAS의 각 단계는 매주 1편씩 업데이트 됩니다.
<br>
※ LEANCAMVAS 단계가 필요하지 않은 예비창업자들은 사업화 단계로 넘어가셔도 됩니다
           <br><br>
           [정기 업데이트는 매주 목요일에 이루어집니다]
            </div>
          </div>
        </div>
        
        
        
      </div>

    </div>
@endsection