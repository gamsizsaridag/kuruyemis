<?php //$user=\App\Models\User::where('id',Session()->has('loggedUser'))->first(); ?>

    <!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <title>@yield('title','GHS YAZILIM')</title>
    <!-- Custom CSS -->
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{-- font awasome eklentileri--}}
    <link href="/admin/assets/icons/font-awesome/css/all.css" rel="stylesheet">
    {{--    <link href="/admin/assets/icons/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">--}}
    {{--    <link href="/admin/assets/icons/weather-icons/css/weather-i/assets/icons/font-awesome/css/all.csscons.min.css" rel="stylesheet">--}}
    {{--    <link href="/admin/assets/icons/themify-icons/themify-icons.css" rel="stylesheet">--}}
    {{--    <link href="/admin/assets/icons/flag-icon-css/flag-icon.min.css" rel="stylesheet">--}}
    {{--    <link href="/admin/assets/icons/material-design-iconic-font/css/materialdesignicons.min.css" rel="stylesheet">--}}
<!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    {{--    <script src="/admin/assets/node_modules/popper/popper.min.js"></script>--}}
    <script src="/admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/admin/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/dist/js/custom.min.js"></script>
    {{--    style.css--}}
    <link href="/admin/style.css" rel="stylesheet">

    {{--datatable--}}
    <link rel="stylesheet" type="text/css"
          href="/admin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
          href="/admin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    @yield('head')
</head>

<body class="skin-blue fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">GHS yazılıms</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo text -->
                         <img src="/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage"/></span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <li class="nav-item"><a
                            class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                            href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                    <!-- ============================================================== -->
                    {{--                    <!-- Search -->--}}
                    {{--                    <!-- ============================================================== -->--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <form class="app-search d-none d-md-block d-lg-block">--}}
                    {{--                            <input type="text" class="form-control" placeholder="Search & enter">--}}
                    {{--                        </form>--}}
                    {{--                    </li>--}}
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" target="_blank" href="{{route('front.home')}}"> <i
                                class="ti-home"></i>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"--}}
                {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>--}}
                {{--                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown"--}}
                {{--                             aria-labelledby="2">--}}
                {{--                            <ul>--}}
                {{--                                <li>--}}
                {{--                                    <div class="drop-title">You have 4 new messages</div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <div class="message-center">--}}
                {{--                                        <!-- Message -->--}}
                {{--                                        <a href="javascript:void(0)">--}}
                {{--                                            <div class="user-img"><img src="/admin/assets/images/users/1.jpg" alt="user"--}}
                {{--                                                                       class="img-circle"> <span--}}
                {{--                                                    class="profile-status online pull-right"></span></div>--}}
                {{--                                            <div class="mail-contnet">--}}
                {{--                                                <h5>Pavan kumar</h5> <span--}}
                {{--                                                    class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>--}}
                {{--                                            </div>--}}
                {{--                                        </a>--}}
                {{--                                        <!-- Message -->--}}
                {{--                                        <a href="javascript:void(0)">--}}
                {{--                                            <div class="user-img"><img src="/admin/assets/images/users/2.jpg" alt="user"--}}
                {{--                                                                       class="img-circle"> <span--}}
                {{--                                                    class="profile-status busy pull-right"></span></div>--}}
                {{--                                            <div class="mail-contnet">--}}
                {{--                                                <h5>Sonu Nigam</h5> <span--}}
                {{--                                                    class="mail-desc">I've sung a song! See you at</span> <span--}}
                {{--                                                    class="time">9:10 AM</span></div>--}}
                {{--                                        </a>--}}
                {{--                                        <!-- Message -->--}}
                {{--                                        <a href="javascript:void(0)">--}}
                {{--                                            <div class="user-img"><img src="/admin/assets/images/users/3.jpg" alt="user"--}}
                {{--                                                                       class="img-circle"> <span--}}
                {{--                                                    class="profile-status away pull-right"></span></div>--}}
                {{--                                            <div class="mail-contnet">--}}
                {{--                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span--}}
                {{--                                                    class="time">9:08 AM</span></div>--}}
                {{--                                        </a>--}}
                {{--                                        <!-- Message -->--}}
                {{--                                        <a href="javascript:void(0)">--}}
                {{--                                            <div class="user-img"><img src="/admin/assets/images/users/4.jpg" alt="user"--}}
                {{--                                                                       class="img-circle"> <span--}}
                {{--                                                    class="profile-status offline pull-right"></span></div>--}}
                {{--                                            <div class="mail-contnet">--}}
                {{--                                                <h5>Pavan kumar</h5> <span--}}
                {{--                                                    class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>--}}
                {{--                                            </div>--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all--}}
                {{--                                            e-Mails</strong> <i class="fa fa-angle-right"></i> </a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                {{--                    <li class="nav-item dropdown mega-dropdown"><a--}}
                {{--                            class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"--}}
                {{--                            aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>--}}
                {{--                        <div class="dropdown-menu animated bounceInDown">--}}
                {{--                            <ul class="mega-dropdown-menu row">--}}
                {{--                                <li class="col-lg-3 col-xlg-2 m-b-30">--}}
                {{--                                    <h4 class="m-b-20">CAROUSEL</h4>--}}
                {{--                                    <!-- CAROUSEL -->--}}
                {{--                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
                {{--                                        <div class="carousel-inner" role="listbox">--}}
                {{--                                            <div class="carousel-item active">--}}
                {{--                                                <div class="container"><img class="d-block img-fluid"--}}
                {{--                                                                            src="/admin/assets/images/big/img1.jpg"--}}
                {{--                                                                            alt="First slide"></div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="carousel-item">--}}
                {{--                                                <div class="container"><img class="d-block img-fluid"--}}
                {{--                                                                            src="/admin/assets/images/big/img2.jpg"--}}
                {{--                                                                            alt="Second slide"></div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="carousel-item">--}}
                {{--                                                <div class="container"><img class="d-block img-fluid"--}}
                {{--                                                                            src="/admin/assets/images/big/img3.jpg"--}}
                {{--                                                                            alt="Third slide"></div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"--}}
                {{--                                           data-slide="prev"> <span class="carousel-control-prev-icon"--}}
                {{--                                                                    aria-hidden="true"></span> <span class="sr-only">Previous</span>--}}
                {{--                                        </a>--}}
                {{--                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"--}}
                {{--                                           data-slide="next"> <span class="carousel-control-next-icon"--}}
                {{--                                                                    aria-hidden="true"></span> <span class="sr-only">Next</span>--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <!-- End CAROUSEL -->--}}
                {{--                                </li>--}}
                {{--                                <li class="col-lg-3 m-b-30">--}}
                {{--                                    <h4 class="m-b-20">ACCORDION</h4>--}}
                {{--                                    <!-- Accordian -->--}}
                {{--                                    <div class="accordion" id="accordionExample">--}}
                {{--                                        <div class="card m-b-0">--}}
                {{--                                            <div class="card-header bg-white p-0" id="headingOne">--}}
                {{--                                                <h5 class="mb-0">--}}
                {{--                                                    <button class="btn btn-link" type="button" data-toggle="collapse"--}}
                {{--                                                            data-target="#collapseOne" aria-expanded="true"--}}
                {{--                                                            aria-controls="collapseOne">--}}
                {{--                                                        Collapsible Group Item #1--}}
                {{--                                                    </button>--}}
                {{--                                                </h5>--}}
                {{--                                            </div>--}}

                {{--                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"--}}
                {{--                                                 data-parent="#accordionExample">--}}
                {{--                                                <div class="card-body">--}}
                {{--                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="card m-b-0">--}}
                {{--                                            <div class="card-header bg-white p-0" id="headingTwo">--}}
                {{--                                                <h5 class="mb-0">--}}
                {{--                                                    <button class="btn btn-link collapsed" type="button"--}}
                {{--                                                            data-toggle="collapse" data-target="#collapseTwo"--}}
                {{--                                                            aria-expanded="false"--}}
                {{--                                                            aria-controls="collapseTwo">--}}
                {{--                                                        Collapsible Group Item #2--}}
                {{--                                                    </button>--}}
                {{--                                                </h5>--}}
                {{--                                            </div>--}}
                {{--                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"--}}
                {{--                                                 data-parent="#accordionExample">--}}
                {{--                                                <div class="card-body">--}}
                {{--                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="card m-b-0">--}}
                {{--                                            <div class="card-header bg-white p-0" id="headingThree">--}}
                {{--                                                <h5 class="mb-0">--}}
                {{--                                                    <button class="btn btn-link collapsed" type="button"--}}
                {{--                                                            data-toggle="collapse" data-target="#collapseThree"--}}
                {{--                                                            aria-expanded="false"--}}
                {{--                                                            aria-controls="collapseThree">--}}
                {{--                                                        Collapsible Group Item #3--}}
                {{--                                                    </button>--}}
                {{--                                                </h5>--}}
                {{--                                            </div>--}}
                {{--                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"--}}
                {{--                                                 data-parent="#accordionExample">--}}
                {{--                                                <div class="card-body">--}}
                {{--                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="col-lg-3  m-b-30">--}}
                {{--                                    <h4 class="m-b-20">CONTACT US</h4>--}}
                {{--                                    <!-- Contact -->--}}
                {{--                                    <form>--}}
                {{--                                        <div class="form-group">--}}
                {{--                                            <input type="text" class="form-control" id="exampleInputname1"--}}
                {{--                                                   placeholder="Enter Name"></div>--}}
                {{--                                        <div class="form-group">--}}
                {{--                                            <input type="email" class="form-control" placeholder="Enter email"></div>--}}
                {{--                                        <div class="form-group">--}}
                {{--                                            <textarea class="form-control" id="exampleTextarea" rows="3"--}}
                {{--                                                      placeholder="Message"></textarea>--}}
                {{--                                        </div>--}}
                {{--                                        <button type="submit" class="btn btn-info">Submit</button>--}}
                {{--                                    </form>--}}
                {{--                                </li>--}}
                {{--                                <li class="col-lg-3 col-xlg-4 m-b-30">--}}
                {{--                                    <h4 class="m-b-20">List style</h4>--}}
                {{--                                    <!-- List style -->--}}
                {{--                                    <ul class="list-style-none">--}}
                {{--                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You--}}
                {{--                                                can give link</a></li>--}}
                {{--                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give--}}
                {{--                                                link</a></li>--}}
                {{--                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>--}}
                {{--                                                Another Give link</a></li>--}}
                {{--                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth--}}
                {{--                                                link</a></li>--}}
                {{--                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>--}}
                {{--                                                Another fifth link</a></li>--}}
                {{--                                    </ul>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="/admin/assets/images/users/1.jpg" alt="user" class=""> <span
                                class="hidden-md-down">{{Auth::User()->name}}&nbsp;<i
                                    class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <!-- text-->
                        {{--                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"> </i></a>--}}
                        {{--                            <!-- text-->--}}
                        {{--                            <div class="dropdown-divider"></div>--}}
                        {{--                            <!-- text-->--}}
                        {{--                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Profil ayarlarım</a>--}}
                        {{--                            <!-- text-->--}}
                        {{--                            <div class="dropdown-divider"></div>--}}
                        <!-- text-->
                            <a href="{{route('yonetim.logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i>
                                Çıkış Yap</a>
                            <!-- text-->
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"><a class="nav-link  waves-effect waves-light"
                                                              href="javascript:void(0)"><i class="ti-settings"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
{{-- menu --}}
@include('yonetim.layout.menu')
<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
        {{--         ekstra modüller / new create --}}
        @yield('modul')
        <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{--                            yield contact alanı --}}
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                   class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                   class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                   class="megna-dark-theme ">12</a></li>
                        </ul>
                        {{--            <ul class="m-t-20 chatonline">--}}
                        {{--                <li><b>Chat option</b></li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>--}}
                        {{--                </li>--}}
                        {{--                <li>--}}
                        {{--                    <a href="javascript:void(0)"><img src="/admin/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>--}}
                        {{--                </li>--}}
                        {{--            </ul>--}}
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2021 GHS YAZILIM
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>


<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif
@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach


{{-- datatable ayarları --}}


<script src="/admin/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

<script>
    $(function () {
        $('#datatable').DataTable({
            "language": {
                "emptyTable": "Tabloda herhangi bir veri mevcut değil",
                "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "infoEmpty": "Kayıt yok",
                "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "infoThousands": ".",
                "lengthMenu": "Sayfada _MENU_ kayıt göster",
                "loadingRecords": "Yükleniyor...",
                "processing": "İşleniyor...",
                "search": "Ara:",
                "zeroRecords": "Eşleşen kayıt bulunamadı",
                "paginate": {
                    "first": "İlk",
                    "last": "Son",
                    "next": "Sonraki",
                    "previous": "Önceki"
                },
                "aria": {
                    "sortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sortDescending": ": azalan sütun sıralamasını aktifleştir"
                },
                "select": {
                    "rows": {
                        "_": "%d kayıt seçildi",
                        "1": "1 kayıt seçildi",
                        "0": "-"
                    },
                    "0": "-",
                    "1": "%d satır seçildi",
                    "2": "-",
                    "_": "%d satır seçildi",
                    "cells": {
                        "1": "1 hücre seçildi",
                        "_": "%d hücre seçildi"
                    },
                    "columns": {
                        "1": "1 sütun seçildi",
                        "_": "%d sütun seçildi"
                    }
                },
                "autoFill": {
                    "cancel": "İptal",
                    "fillHorizontal": "Hücreleri yatay olarak doldur",
                    "fillVertical": "Hücreleri dikey olarak doldur",
                    "info": "-",
                    "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
                },
                "buttons": {
                    "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                    "colvis": "Sütun görünürlüğü",
                    "colvisRestore": "Görünürlüğü eski haline getir",
                    "copy": "Koyala",
                    "copyKeys": "Tablodaki sisteminize kopyalamak için CTRL veya u2318 + C tuşlarına basınız.",
                    "copySuccess": {
                        "1": "1 satır panoya kopyalandı",
                        "_": "%ds satır panoya kopyalandı"
                    },
                    "copyTitle": "Panoya kopyala",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Bütün satırları göster",
                        "1": "-",
                        "_": "%d satır göster"
                    },
                    "pdf": "PDF",
                    "print": "Yazdır"
                },
                "decimal": "-",
                "infoPostFix": "-",
                "searchBuilder": {
                    "add": "Koşul Ekle",
                    "button": {
                        "0": "Arama Oluşturucu",
                        "_": "Arama Oluşturucu (%d)"
                    },
                    "clearAll": "Hepsini Kaldır",
                    "condition": "Koşul",
                    "conditions": {
                        "date": {
                            "after": "Sonra",
                            "before": "Önce",
                            "between": "Arasında",
                            "empty": "Boş",
                            "equals": "Eşittir",
                            "not": "Değildir",
                            "notBetween": "Dışında",
                            "notEmpty": "Dolu"
                        },
                        "number": {
                            "between": "Arasında",
                            "empty": "Boş",
                            "equals": "Eşittir",
                            "gt": "Büyüktür",
                            "gte": "Büyük eşittir",
                            "lt": "Küçüktür",
                            "lte": "Küçük eşittir",
                            "not": "Değildir",
                            "notBetween": "Dışında",
                            "notEmpty": "Dolu"
                        },
                        "string": {
                            "contains": "İçerir",
                            "empty": "Boş",
                            "endsWith": "İle biter",
                            "equals": "Eşittir",
                            "not": "Değildir",
                            "notEmpty": "Dolu",
                            "startsWith": "İle başlar"
                        }
                    },
                    "data": "Veri",
                    "deleteTitle": "Filtreleme kuralını silin",
                    "leftTitle": "Kriteri dışarı çıkart",
                    "logicAnd": "ve",
                    "logicOr": "veya",
                    "rightTitle": "Kriteri içeri al",
                    "title": {
                        "0": "Arama Oluşturucu",
                        "_": "Arama Oluşturucu (%d)"
                    },
                    "value": "Değer"
                },
                "searchPanes": {
                    "clearMessage": "Hepsini Temizle",
                    "collapse": {
                        "0": "Arama Bölmesi",
                        "_": "Arama Bölmesi (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown}\/{total}",
                    "emptyPanes": "Arama Bölmesi yok",
                    "loadMessage": "Arama Bölmeleri yükleniyor ...",
                    "title": "Etkin filtreler - %d"
                },
                "searchPlaceholder": "Ara",
                "thousands": "."
            }
        });
    });

</script>
</body>

</html>
