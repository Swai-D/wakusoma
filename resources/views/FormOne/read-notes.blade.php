@extends('Layout.main-layout')
@section('title', 'Form-One Subject List')
@section('form-one-nav-active', 'active')

@section('content')
<div class="container-fluid">
   <div class="row">

     <!-- image notes loop starts here -->
     <div class="col-lg-12 col-md-12">
         <div class="card card-block card-stretch card-height  note-detail">
             <div class="card-header d-flex justify-content-between pb-1">
               <img src="/assets/images/statement.png" alt="" style="width:100px; height:100px;">

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
                <h4 class="card-title">Subject Name</h4>
                 <h6 class="card-title">Sub-title Name</h6>
                 <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
             </div>
             <div class="card-footer">
                 <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                     <a href="#" class="btn btn-info"><i class="las la-reply mr-2 font-size-20"></i>Back</a>
                     <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                           <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              </a>
                           </li>

                           <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              </a>
                           </li>
                        </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
      <!-- image notes loop ends here -->
 </div>


</div>
@endsection
