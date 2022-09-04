@extends('Layout.main-layout')
@section('title', 'Welcome To Wakusoma')
@section('home-nav-active', 'active')
@section('title-info', 'Courses')

@section('content')
<div class="container-fluid">
   <div class="row">

     <!-- image notes loop starts here -->
      <div class="col-md-6 col-lg-4 col-sm-6">
         <div class="card">
            <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
            <div class="card-body">
               <h4 class="card-title">Form One Notes</h4>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
               <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn course</a>
            </div>
         </div>
      </div>

      <!-- image notes loop ends here -->

      <!-- image notes loop starts here -->
       <div class="col-md-6 col-lg-4 col-sm-6">
          <div class="card">
             <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
             <div class="card-body">
                <h4 class="card-title">Form Two Notes</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn course</a>
             </div>
          </div>
       </div>

       <!-- image notes loop ends here -->

       <!-- image notes loop starts here -->
        <div class="col-md-6 col-lg-4 col-sm-6">
           <div class="card">
              <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
              <div class="card-body">
                 <h4 class="card-title">Form Three Notes</h4>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="/wakusoma/form-one/subject-topics" class="btn btn-success ">Learn course</a>
              </div>
           </div>
        </div>

        <!-- image notes loop ends here -->



   </div>

   <!-- slider image notes starts here -->
   <div class="row">
     <div class="col-sm-12 col-lg-6">
        <div class="card">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Form One Image Notes</h4>
              </div>
           </div>
           <div class="card-body">
              <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
                 </a>
              </div>

           </div>

        </div>
     </div>

     <div class="col-sm-12 col-lg-6">
        <div class="card">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Form Two Image Notes</h4>
              </div>
           </div>
           <div class="card-body">
              <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
                 </a>
              </div>

           </div>

        </div>
     </div>

     <div class="col-sm-12 col-lg-6">
        <div class="card">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Form Three Image Notes</h4>
              </div>
           </div>
           <div class="card-body">
              <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                    <div class="carousel-item">
                       <img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                    </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
                 </a>
              </div>

           </div>

        </div>
     </div>
   </div>
   <!-- slider image notes ends here -->





   <!-- video notes starts here -->
   <div class="row">
      <div class="col-sm-12 col-lg-6 col-md-6">

         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Form One Video Notes</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
               <!-- 4:3 aspect ratio -->
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-md-6">

         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Form Two Video Notes</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
               <!-- 4:3 aspect ratio -->
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-md-6">

         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Form Three Video Notes</h4>
               </div>
            </div>
            <div class="card-body">
               <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
               <!-- 4:3 aspect ratio -->
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </div>

   </div>
   <!-- video notes ends here -->




</div>
@endsection
