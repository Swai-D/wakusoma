@extends('Layout.main-layout')
@section('title', 'Form-One Subject List')
@section('form-one-nav-active', 'active')

@section('content')
<div class="container-fluid">
  <div class="">
    <!-- image notes loop starts here -->
     <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card">
           <img src="/assets/images/page-img/07.jpg" class="card-img-top" alt="#">
           <div class="card-body">
              <h4 class="card-title">Chemistry</h4>
              <p class="card-text">This is a discription of chemistry subject.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
           </div>
        </div>
     </div>

     <!-- image notes loop ends here -->

  </div>

   <div class="row">


     <!-- image notes loop starts here -->
     <div class="col-lg-4 col-md-6">
         <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
             <div class="card-header d-flex justify-content-between pb-1">
                 <div class="icon iq-icon-box-2 icon-border-warning rounded">
                     <svg width="23" height="23" class="svg-icon" id="iq-main-03"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                     </svg>
                 </div>
                 <div class="card-header-toolbar d-flex align-items-center">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                     <div class="card-header-toolbar d-flex align-items-center">
                         <div class="dropdown">
                             <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton6"
                                 data-toggle="dropdown" aria-expanded="false" role="button">
                                 <img src="/assets/images/menu.png" alt="" style="width:16px; height:16px;">
                             </span>
                             <div class="dropdown-menu dropdown-menu-right"
                                 aria-labelledby="note-dropdownMenuButton6" style="">
                                 <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                 <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                 <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card-body rounded">
                 <h4 class="card-title">Topic One</h4>
                 <ul class="pl-3 mb-0">
                     <li class="note-list mb-2">Sub-title one.</li>
                     <li class="note-list mb-2">Sub-title Two.</li>
                     <li class="note-list">Sub-title Three.</li>
                 </ul>
             </div>
             <div class="card-footer">
                 <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                     <a href="/wakusoma/form-one/read-notes" class=""><i class="las la-book mr-2 font-size-20"></i>Read Notes</a>
                     <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                 </div>
             </div>
         </div>
     </div>
      <!-- image notes loop ends here -->

      <!-- image notes loop starts here -->
      <div class="col-lg-4 col-md-6">
          <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
              <div class="card-header d-flex justify-content-between pb-1">
                  <div class="icon iq-icon-box-2 icon-border-warning rounded">
                      <svg width="23" height="23" class="svg-icon" id="iq-main-03"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                      </svg>
                  </div>
                  <div class="card-header-toolbar d-flex align-items-center">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                      <div class="card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                              <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton6"
                                  data-toggle="dropdown" aria-expanded="false" role="button">
                                  <img src="/assets/images/menu.png" alt="" style="width:16px; height:16px;">
                              </span>
                              <div class="dropdown-menu dropdown-menu-right"
                                  aria-labelledby="note-dropdownMenuButton6" style="">
                                  <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                  <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                  <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-body rounded">
                  <h4 class="card-title">Topic Two</h4>
                  <ul class="pl-3 mb-0">
                      <li class="note-list mb-2">Sub-title one.</li>
                      <li class="note-list mb-2">Sub-title Two.</li>
                      <li class="note-list">Sub-title Three.</li>
                  </ul>
              </div>
              <div class="card-footer">
                  <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                      <a href="/wakusoma/form-one/read-notes" class=""><i class="las la-book mr-2 font-size-20"></i>Read Notes</a>
                      <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                  </div>
              </div>
          </div>
      </div>
       <!-- image notes loop ends here -->

       <!-- image notes loop starts here -->
       <div class="col-lg-4 col-md-6">
           <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
               <div class="card-header d-flex justify-content-between pb-1">
                   <div class="icon iq-icon-box-2 icon-border-warning rounded">
                       <svg width="23" height="23" class="svg-icon" id="iq-main-03"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                       </svg>
                   </div>
                   <div class="card-header-toolbar d-flex align-items-center">
                       <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                       <div class="card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                               <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton6"
                                   data-toggle="dropdown" aria-expanded="false" role="button">
                                   <img src="/assets/images/menu.png" alt="" style="width:16px; height:16px;">
                               </span>
                               <div class="dropdown-menu dropdown-menu-right"
                                   aria-labelledby="note-dropdownMenuButton6" style="">
                                   <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                   <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                   <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="card-body rounded">
                   <h4 class="card-title">Topic Three</h4>
                   <ul class="pl-3 mb-0">
                       <li class="note-list mb-2">Sub-title one.</li>
                       <li class="note-list mb-2">Sub-title Two.</li>
                       <li class="note-list">Sub-title Three.</li>
                   </ul>
               </div>
               <div class="card-footer">
                   <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                       <a href="/wakusoma/form-one/read-notes" class=""><i class="las la-book mr-2 font-size-20"></i>Read Notes</a>
                       <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                   </div>
               </div>
           </div>
       </div>
        <!-- image notes loop ends here -->
 </div>




</div>
@endsection
