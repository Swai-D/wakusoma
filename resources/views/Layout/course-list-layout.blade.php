@extends('Layout.main-layout')
@section('title', 'Welcome To Wakusoma')
@section('nav-active', 'active')
@section('content')
<div class="container-fluid">
   <div class="row">

     <!-- image notes loop starts here -->
      <div class="col-md-6 col-lg-4 col-sm-6">
         <div class="card">
            <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
            <div class="card-body">
               <h4 class="card-title">Card title</h4>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
               <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn Course</a>
            </div>
         </div>
      </div>

      <!-- image notes loop ends here -->
 </div>


</div>
@endsection
