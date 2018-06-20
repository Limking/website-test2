 @extends('layouts.submaster')


@section('content')
    <header >

      <img class="img-fluid" src="img/lean-bg/leantitle-problem.png" style=" width=100%;" >

    </header>


    <!-- Page Content -->
   <div class="container">

     <h1 class="my-4">WELCOME TO LEANCANVAS 'PROBLEM'</h1>

     <!-- Marketing Icons Section -->
     <div class="row">
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header">Customer Segments</h4>
           <div class="card-body">
             <p class="card-text">수요고객층은 어떻게 설정할까요? <br> &nbsp</p>
           </div>
           <div class="card-footer">
             <a href="customer" class="btn btn-primary">Learn More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header">Unique Value</h4>
           <div class="card-body">
             <p class="card-text">내 아이템의 가치 중에 최고의 가치는 어떻게 설정하는 것인가요?</p>
           </div>
           <div class="card-footer">
             <a href="unique" class="btn btn-primary">Learn More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header">Solution</h4>
           <div class="card-body">
             <p class="card-text">문제의 해결방법을 어떻게 만들었으며 해결방법의 가치는 어떻게 책정할까요?</p>
           </div>
           <div class="card-footer">
             <a href="solution" class="btn btn-primary">Learn More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-12 mb-4" style="margin-top: 100px;">
        <div class="card h-100">

      <div class="youtubeWrap">
  <iframe width="560" height="405" src="https://www.youtube.com/embed/bQSconiI9NA" frameborder="0" allowfullscreen></iframe>
</div>
       </div>
        </div>

     </div>
<div class="img-thumbnail" style="text-align: center;">
      	<img class="img-fluid d-block mx-auto" src="img/lean_c/problem_cartoon.png" style="width: 85%;  margin: 50px;" alt="">
		</div>
   
   
  	<div class="card-link" style="text-align: right; margin: 20px;">
             <a href="cusstomer" class="btn btn-primary">다음화 보기</a>
         </div>

   </div>
     <!-- /.row -->
     @endsection