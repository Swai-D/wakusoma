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
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="/backend/index.html" class="header-logo">
                          <img src="/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                      </a>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                          <li class="nav-item nav-icon search-content">
                              <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ri-search-line"></i>
                              </a>
                              <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                  <form action="#" class="searchbox p-2">
                                      <div class="form-group mb-0 position-relative">
                                      <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                      <a href="#" class="search-link"><i class="las la-search"></i></a>
                                      </div>
                                  </form>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown mail-content">
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                              <span class="bg-primary"></span>
                              </a>

                          </li>
                          <li class="nav-item nav-icon dropdown mail-content">
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail rounded-circle">2</span>
                              <span class="bg-primary "></span>
                              </a>

                          </li>
                          <li class="caption-content">
                             <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="/assets/images/default.png" class="img-fluid rounded avatar-50" alt="user">
                              </a>
                              <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                                  <a class="dropdown-item mb-2" href="/app/user-profile.html">
                                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                                      <span class="mt-2">My Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="/app/user-profile-edit.html">
                                      <i class="las la-user-edit font-size-20 mr-1"></i>
                                      <span>Edit Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="/app/user-account-setting.html">
                                      <i class="las la-user-cog font-size-20 mr-1"></i>
                                      <span>Account Settings</span>
                                  </a>
                                  <a class="dropdown-item" href="/app/user-privacy-setting.html">
                                      <i class="las la-user-shield font-size-20 mr-1"></i>
                                      <span>Privacy Settings</span>
                                  </a>
                                  <hr class="my-1">
                                  <a class="dropdown-item" href="/backend/index.html">
                                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                      <span>Logout</span>
                                  </a>
                              </div>
                          </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="/backend/index.html" class="header-logo">
                  <img src="/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> <h4 class="logo-title ml-3">Wakusoma</h4>
              </a>
              <div class="iq-menu-bt-sidebar">
                  <i class="las la-times wrapper-menu"></i>
              </div>
          </div>
          <div class="sidebar-caption dropdown">
              <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/assets/images/default.png " class="img-fluid rounded avatar-50 mr-3" alt="user">
                  <div class="caption">
                      <h6 class="mb-0 line-height">Bud Wiser</h6>
                  </div>
                  <i class="las la-angle-down"></i>
              </a>
              <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item mb-2" href="../app/user-profile.html">
                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                      <span class="mt-2">My Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="../app/user-profile-edit.html">
                      <i class="las la-user-edit font-size-20 mr-1"></i>
                      <span>Edit Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="../app/user-account-setting.html">
                      <i class="las la-user-cog font-size-20 mr-1"></i>
                      <span>Account Settings</span>
                  </a>
                  <a class="dropdown-item mb-3" href="../app/user-privacy-setting.html">
                      <i class="las la-user-shield font-size-20 mr-1"></i>
                      <span>Privacy Settings</span>
                  </a>
                  <hr class="my-2">
                  <a class="dropdown-item" href="../backend/auth-sign-in.html">
                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                      <span>Logout</span>
                  </a>
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
                      <li class="active">
                              <a href="../backend/index.html" class="svg-icon">
                                  <i>
                                      <svg class="svg-icon" id="iq-main-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                      </svg>
                                  </i>
                                  <span>Your Notes</span>
                              </a>
                          <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          </ul>
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
                              <li class="">
                                  <a href="../backend/page-project-plans.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form One</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/page-routinenotes.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form Two</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="../backend/page-planning.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form Three</span>
                                  </a>
                              </li>

                              <li class="">
                                  <a href="../backend/page-planning.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form Four</span>
                                  </a>
                              </li>

                              <li class="">
                                  <a href="../backend/page-planning.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form Five</span>
                                  </a>
                              </li>

                              <li class="">
                                  <a href="../backend/page-planning.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Form Six</span>
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
                        <div class="iq-note-callapse-menu">
                            <a class="iq-note-callapse-btn show-note-button" data-toggle="collapse" href="#collapseMenu" role="button"
                                data-extra-toggle="toggle" data-extra-class-show=".hide-note-button" data-extra-class-hide=".show-note-button"
                                aria-expanded="false">
                                <i class="las la-pencil-alt pr-2"></i>Write Your Note
                            </a>
                            <span class="hide-note-button d-none"><i class="las la-folder pr-2"></i>Folder</span>
                        </div>
                        <div class="note-right media align-items-top hide-note-button d-none">
                            <div class="mr-2"><a href="#" class="btn view-btn body-bg" data-toggle="modal" data-target="#share-note">Share</a></div>
                            <div class="view-btn btn-dropdown body-bg rounded">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="ri-more-2-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#"><i class="lar la-heart mr-3"></i>Add To Favourite</a>
                                        <a class="dropdown-item" href="#"><i class="las la-thumbtack mr-3"></i>Mark As Pin</a>
                                        <a class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Move to Trash</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card topnav-right">

                <div class="card-body card-content-right">
                    <ul class="list-inline m-0 p-0 d-flex align-items-center justify-content-around">
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                            <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown pl-3">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                            <span class="bg-primary "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton002">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="/assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="collapse" id="collapseMenu">
                    <div class="card card-block card-stretch">
                        <div class="card-body write-card">
                            <div class="container-fluid collapse-fluid">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 p-0">
                                        <div class="card card-transparent card-block card-stretch event-note">
                                            <div class="card-body px-0 bukmark">
                                                <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                                    <div class="quill-tool">
                                                    </div>
                                                    <div class="iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="las la-expand-arrows-alt font-size-18"></i></a></div>
                                                </div>
                                                <div id="quill-toolbar">
                                                    <h1 class="mb-3">Birthday Bash</h1>
                                                    <p>Hosting friend's birthday party and purchasing items.</p>
                                                    <ul>
                                                        <li>Cake</li>
                                                        <li>Balloons</li>
                                                        <li>Cold Drinks</li>
                                                    </ul>
                                                    <img src="/assets/images/event-note/01.png" class="img-fluid image-1" alt="image">
                                                    <img src="/assets/images/event-note/02.png" class="img-fluid image-2" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 p-0 d-flex justify-content-end">
                                        <button class="btn btn-outline-primary" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Close</button>
                                        <button class="btn btn-primary ml-2" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="/backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="/backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
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
