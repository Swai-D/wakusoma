<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="/assets/images/favicon.ico" />
      <link rel="stylesheet" href="/assets/css/backend-plugin.min.css?v=1.0.0">
      <link rel="stylesheet" href="/assets/css/backend.css?v=1.0.0">
      <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="/assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="/assets/vendor/@icon/dripicons/dripicons.css">  </head>
  <body class="noteplus-layout  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
          <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
          <div class="card shadow-none tag-details mb-0">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-0">Tag List</h4>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#create-note"><i class="ri-add-line font-size-20"></i></a>
                </div>
            </div>

            </div>
          </div>
      </div>
    </div>
    <!-- Modal -->

    <!-- Wrapper Start -->
    <div class="wrapper">
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <img src="/assets/images/menu.png" alt="" class=" wrapper-menu">
                      <a href="/backend/index.html" class="header-logo">
                        <h4>Wakusoma</h4>
                      </a>
                  </div>

              </nav>
          </div>
      </div>
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="/" class="header-logo">
                <h4 class="logo-title ml-3">Wakusoma</h4>
              </a>
              <div class="iq-menu-bt-sidebar">
                  <i class="las la-times wrapper-menu"></i>
              </div>
          </div>

          <div class="data-scrollbar" data-scroll="1">
              <div class="iq-search-bar device-search mb-3">
                  <form action="#" class="searchbox">
                  <a class="search-link" href="#">
                    <img src="/assets/images/search.png" alt="">
                  </a>
                  <input type="text" class="text search-input" placeholder="Search">
                  </form>
              </div>

              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="@yield('home-nav-active')">
                        <a href="/" class="collapsed svg-icon"  aria-expanded="false">
                            <i>
                                <svg width="20" class="svg-icon" id="iq-main-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                </svg>
                            </i>
                            <span>Home </span>

                        </a>

                    </li>

                      <li class="">
                          <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                  </svg>
                              </i>
                              <span>Notebooks</span>
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="notebooks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="@yield('form-one-nav-active')">
                                  <a href="/wakusoma/form-one/subject-list" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form One</span>
                                  </a>
                              </li>
                          </ul>
                      </li>

                  </ul>
              </nav>

          </div>
      </div>
    <div class="content-page">
     <div class="container-fluid note-details">
        <div class="desktop-header">
            <div class="card card-block topnav-left">
                <div class="card-body write-card">
                    <div class="d-flex align-items-center justify-content-between">
                      <h4 class="text-capitalize">@yield('title-info')</h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            @yield('content')
        </div>
        <!-- Page end  -->
    </div>

  </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <span class="text-secondary mr-1">{{date('M, Y')}} ©<a href="#" class="">odessa lab, Arusha</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="/assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="/assets/js/flex-tree.min.js"></script>
    <script src="/assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="/assets/js/table-treeview.js"></script>

    <!-- SweetAlert JavaScript -->
    <script src="/assets/js/sweetalert.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="/assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="/assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="/assets/js/app.js"></script>
  </body>
</html>
