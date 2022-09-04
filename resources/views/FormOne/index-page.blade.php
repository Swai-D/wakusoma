@extends('Layout.main-layout')
@section('title', 'Form-One Notes List')
@section('form-one-nav-active', 'active')
@section('title-info', 'Form One Subject List')
@section('content')
<div class="container-fluid">

   <div class="row">

     <!-- image notes loop starts here -->
      <div class="col-md-6 col-lg-4 col-sm-6">
         <div class="card">
            <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
            <div class="card-body">
               <h4 class="card-title">Chemistry</h4>
               <p class="card-text">This is a discription of chemistry subject.</p>
               <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
               <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn Chemistry</a>
            </div>
         </div>
      </div>

      <!-- image notes loop ends here -->

      <!-- image notes loop starts here -->
       <div class="col-md-6 col-lg-4 col-sm-6">
          <div class="card">
             <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
             <div class="card-body">
                <h4 class="card-title">Physics</h4>
                <p class="card-text">This is a discription of Physics subject.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn Physics</a>
             </div>
          </div>
       </div>

       <!-- image notes loop ends here -->


       <!-- image notes loop starts here -->
        <div class="col-md-6 col-lg-4 col-sm-6">
           <div class="card">
              <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
              <div class="card-body">
                 <h4 class="card-title">Mathematics</h4>
                 <p class="card-text">This is a discription of Mathematics subject.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn Mathematics</a>
              </div>
           </div>
        </div>

        <!-- image notes loop ends here -->



   </div>


</div>
@endsection
