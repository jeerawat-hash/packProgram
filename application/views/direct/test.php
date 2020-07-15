<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 01:41:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets_new/images/favicon.png">
    <title>KMUTNB  Temperature measurement </title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="./assets_new/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="./dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="./assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="./assets_new/libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
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
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-iconnn.png" alt="homepage" class="dark-logo"  width="50px" height="60px" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                           <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo text -->
                          <!--  <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block search-box"> <a
                                class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> 
                                <a class="srh-btn"><i class="ti-close"></i></a> 
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Mega Menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a
                                class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row p-0 m-0 list-inline">
                                    <li class="col-lg-3 col-xlg-2 mb-4">
                                        <h4 class="mb-3">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid"
                                                            src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev"> <span
                                                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next"> <span
                                                    class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 mb-4">
                                        <h4 class="mb-3">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="card mb-1">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  mb-4">
                                        <h4 class="mb-3">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 mb-4">
                                        <h4 class="mb-3">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Mega Menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <h5 class="mb-0 font-weight-medium">Notifications</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative" style="height:250px;">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-danger rounded-circle btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Luanch Admin</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my new admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success rounded-circle btn-circle"><i class="ti-calendar"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Event today</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just a reminder that you have event</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i class="ti-settings"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Settings</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">You can customize this template as you want</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i class="ti-user"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <h5 class="font-weight-medium mb-0">You have 4 new messages</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body position-relative" style="height:250px;">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                                <ul class="dropdown-user list-style-none">
                                    <li>
                                        <div class="dw-user-box p-3 d-flex">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                            <div class="u-text ml-2">
                                                <h4 class="mb-0">Steave Jobs</h4>
                                                <p class="text-muted mb-1 font-14"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb9d8a999e85ab8c868a8287c5888486">[email&#160;protected]</a></p>
                                                <a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url(../assets/images/background/user-infoo.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" class="w-100" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY"> 
                            <a href="#" class="dropdown-item"><i class="ti-user"></i>
                                My Profile</a> 
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                                Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> 
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> 
                            <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 1 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 2 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 3 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 4 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index5.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 5 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index6.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 6 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-content-copy"></i><span class="hide-menu">Page Layouts </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="layout-inner-fixed-left-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                            class="hide-menu"> Inner Fixed Left Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-fixed-right-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                            class="hide-menu"> Inner Fixed Right Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-left-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                            class="hide-menu"> Inner Left Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-right-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span
                                            class="hide-menu"> Inner Right Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-header.html" class="sidebar-link"><i
                                            class="mdi mdi-view-quilt"></i><span class="hide-menu"> Fixed Header
                                        </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span
                                            class="hide-menu"> Fixed Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-header-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-view-column"></i><span class="hide-menu">
                                            Fixed Header &amp; Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-boxed-layout.html" class="sidebar-link"><i
                                            class="mdi mdi-view-carousel"></i><span class="hide-menu"> Box Layout
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Apps</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-calendar.html" aria-expanded="false"><i class="mdi mdi-calendar"></i><span
                                    class="hide-menu">Calendar</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-chats.html" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span
                                    class="hide-menu">Chat Apps</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-contacts.html" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
                                    class="hide-menu">Contact</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-invoice.html" aria-expanded="false"><i class="mdi mdi-book"></i><span
                                    class="hide-menu">Invoice</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-notes.html" aria-expanded="false"><i class="mdi mdi-arrange-bring-forward"></i><span
                                    class="hide-menu">Notes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-todo.html" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span
                                    class="hide-menu">Todo</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-taskboard.html" aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span
                                    class="hide-menu">Taskboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Inbox </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="inbox-email.html" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
                                <li class="sidebar-item"><a href="inbox-email-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail
                                        </span></a></li>
                                <li class="sidebar-item"><a href="inbox-email-compose.html" class="sidebar-link"><i
                                            class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Ticket </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="ticket-list.html" class="sidebar-link"><i
                                            class="mdi mdi-book-multiple"></i><span class="hide-menu"> Ticket List
                                        </span></a></li>
                                <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-book-plus"></i><span class="hide-menu"> Ticket Detail
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">UI</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-widgets"></i><span
                                    class="hide-menu">Ui Elements </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i
                                            class="mdi mdi-toggle-switch"></i><span class="hide-menu">
                                            Buttons</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i
                                            class="mdi mdi-tablet"></i><span class="hide-menu"> Modals</span></a></li>
                                <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><i
                                            class="mdi mdi-sort-variant"></i><span class="hide-menu"> Tab</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><i
                                            class="mdi mdi-image-filter-vintage"></i><span class="hide-menu"> Tooltip
                                            &amp; Popover</span></a></li>
                                <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><i
                                            class="mdi mdi-message-bulleted"></i><span class="hide-menu">
                                            Notification</span></a></li>
                                <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><i
                                            class="mdi mdi-poll"></i><span class="hide-menu"> Progressbar</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><i
                                            class="mdi mdi-format-line-spacing"></i><span class="hide-menu">
                                            Typography</span></a></li>
                                <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><i
                                            class="mdi mdi-bootstrap"></i><span class="hide-menu"> Bootstrap
                                            Ui</span></a></li>
                                <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><i
                                            class="mdi mdi-equal"></i><span class="hide-menu"> Breadcrumb</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><i
                                            class="mdi mdi-file-video"></i><span class="hide-menu"> List
                                            Media</span></a></li>
                                <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><i
                                            class="mdi mdi-view-module"></i><span class="hide-menu"> Grid</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><i
                                            class="mdi mdi-view-carousel"></i><span class="hide-menu">
                                            Carousel</span></a></li>
                                <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><i
                                            class="mdi mdi-application"></i><span class="hide-menu">
                                            Scrollspy</span></a></li>
                                <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span class="hide-menu">
                                            Toasts</span></a></li>
                                <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><i
                                            class="mdi mdi-apple-safari"></i><span class="hide-menu"> Spinner</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-credit-card-multiple"></i><span class="hide-menu">Cards</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="ui-cards.html" class="sidebar-link"><i
                                            class="mdi mdi-layers"></i><span class="hide-menu"> Basic Cards</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-card-customs.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Custom
                                            Cards</span></a></li>
                                <li class="sidebar-item"><a href="ui-card-weather.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-fog"></i><span class="hide-menu">Weather
                                            Cards</span></a></li>
                                <li class="sidebar-item"><a href="ui-card-draggable.html" class="sidebar-link"><i
                                            class="mdi mdi-bandcamp"></i><span class="hide-menu">Draggable
                                            Cards</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-credit-card-multiple"></i><span
                                    class="hide-menu">Components</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="component-sweetalert.html" class="sidebar-link"><i
                                            class="mdi mdi-layers"></i><span class="hide-menu"> Sweet Alert</span></a>
                                </li>
                                <li class="sidebar-item"><a href="component-nestable.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span
                                            class="hide-menu">Nestable</span></a></li>
                                <li class="sidebar-item"><a href="component-noui-slider.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-fog"></i><span class="hide-menu">Noui
                                            slider</span></a></li>
                                <li class="sidebar-item"><a href="component-rating.html" class="sidebar-link"><i
                                            class="mdi mdi-bandcamp"></i><span class="hide-menu">Rating</span></a></li>
                                <li class="sidebar-item"><a href="component-toastr.html" class="sidebar-link"><i
                                            class="mdi mdi-poll"></i><span class="hide-menu">Toastr</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-gradient"></i><span
                                    class="hide-menu">Widgets </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="widgets-apps.html" class="sidebar-link"><i
                                            class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Apps
                                            Widgets </span></a></li>
                                <li class="sidebar-item"><a href="widgets-data.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar"></i><span class="hide-menu"> Data Widgets
                                        </span></a></li>
                                <li class="sidebar-item"><a href="widgets-charts.html" class="sidebar-link"><i
                                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Charts
                                            Widgets</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Forms</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span
                                    class="hide-menu">Form Elements</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><i
                                            class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms
                                            Input</span></a></li>
                                <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i
                                            class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input
                                            Groups</span></a></li>
                                <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><i
                                            class="mdi mdi-select-all"></i><span class="hide-menu"> Input
                                            Grid</span></a></li>
                                <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><i
                                            class="mdi mdi-shape-plus"></i><span class="hide-menu"> Checkboxes &amp;
                                            Radios</span></a></li>
                                <li class="sidebar-item"><a href="form-bootstrap-touchspin.html" class="sidebar-link"><i
                                            class="mdi mdi-switch"></i><span class="hide-menu"> Bootstrap
                                            Touchspin</span></a></li>
                                <li class="sidebar-item"><a href="form-bootstrap-switch.html" class="sidebar-link"><i
                                            class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Bootstrap
                                            Switch</span></a></li>
                                <li class="sidebar-item"><a href="form-select2.html" class="sidebar-link"><i
                                            class="mdi mdi-relative-scale"></i><span class="hide-menu">
                                            Select2</span></a></li>
                                <li class="sidebar-item"><a href="form-dual-listbox.html" class="sidebar-link"><i
                                            class="mdi mdi-tab-unselected"></i><span class="hide-menu"> Dual
                                            Listbox</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Form Layouts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Basic
                                            Forms</span></a></li>
                                <li class="sidebar-item"><a href="form-horizontal.html" class="sidebar-link"><i
                                            class="mdi mdi-file-document-box"></i><span class="hide-menu"> Form
                                            Horizontal</span></a></li>
                                <li class="sidebar-item"><a href="form-actions.html" class="sidebar-link"><i
                                            class="mdi mdi-code-greater-than"></i><span class="hide-menu"> Form
                                            Actions</span></a></li>
                                <li class="sidebar-item"><a href="form-row-separator.html" class="sidebar-link"><i
                                            class="mdi mdi-code-equal"></i><span class="hide-menu"> Row
                                            Separator</span></a></li>
                                <li class="sidebar-item"><a href="form-bordered.html" class="sidebar-link"><i
                                            class="mdi mdi-flip-to-front"></i><span class="hide-menu"> Form
                                            Bordered</span></a></li>
                                <li class="sidebar-item"><a href="form-striped-row.html" class="sidebar-link"><i
                                            class="mdi mdi-content-duplicate"></i><span class="hide-menu"> Striped
                                            Rows</span></a></li>
                                <li class="sidebar-item"><a href="form-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form
                                            Detail</span></a></li>
                                <li class="sidebar-item"><a href="form-material.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Material</span></a></li>
                                <li class="sidebar-item"><a href="form-floating-input.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Floating Input</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-code-equal"></i><span
                                    class="hide-menu">Form Addons</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-paginator.html" class="sidebar-link"><i
                                            class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-img-cropper.html" class="sidebar-link"><i
                                            class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-dropzone.html" class="sidebar-link"><i
                                            class="mdi mdi-crosshairs-gps"></i><span class="hide-menu">
                                            Dropzone</span></a></li>
                                <li class="sidebar-item"><a href="form-mask.html" class="sidebar-link"><i
                                            class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-typeahead.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form
                                            Typehead</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span
                                    class="hide-menu">Form Validation</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-bootstrap-validation.html"
                                        class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span
                                            class="hide-menu"> Bootstrap Validation</span></a></li>
                                <li class="sidebar-item"><a href="form-custom-validation.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Custom
                                            Validation</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-pencil-box-outline"></i><span class="hide-menu">Form
                                    Pickers</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-picker-colorpicker.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Form
                                            Colorpicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-datetimepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-clock"></i><span
                                            class="hide-menu"> Form Datetimepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-bootstrap-rangepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span
                                            class="hide-menu"> Form Bootstrap Rangepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-bootstrap-datepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span
                                            class="hide-menu"> Form Bootstrap Datepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-material-datepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-text"></i><span
                                            class="hide-menu"> Form Material Datepicker</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-dns"></i><span
                                    class="hide-menu">Form Editor</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-editor-ckeditor.html" class="sidebar-link"><i
                                            class="mdi mdi-drawing"></i><span class="hide-menu">Ck Editor</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-editor-quill.html" class="sidebar-link"><i
                                            class="mdi mdi-drupal"></i><span class="hide-menu">Quill Editor</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-editor-summernote.html" class="sidebar-link"><i
                                            class="mdi mdi-brightness-6"></i><span class="hide-menu">Summernote
                                            Editor</span></a></li>
                                <li class="sidebar-item"><a href="form-editor-tinymce.html" class="sidebar-link"><i
                                            class="mdi mdi-bowling"></i><span class="hide-menu">Tinymce Edtor</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="form-wizard.html" aria-expanded="false"><i class="mdi mdi-cube-send"></i><span
                                    class="hide-menu">Form Wizard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="form-repeater.html" aria-expanded="false"><i class="mdi mdi-creation"></i><span
                                    class="hide-menu">Form Repeater</span></a></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Tables</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span
                                    class="hide-menu">Bootstrap Tables</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-all"></i><span class="hide-menu">Basic Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-left"></i><span class="hide-menu">Dark Basic Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><i
                                            class="mdi mdi-border-outside"></i><span class="hide-menu">Sizing Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><i
                                            class="mdi mdi-border-bottom"></i><span class="hide-menu">Coloured Table
                                            Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-border-inside"></i><span class="hide-menu">Datatables</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-vertical"></i><span class="hide-menu"> Basic
                                            Initialisation</span></a></li>
                                <li class="sidebar-item"><a href="table-datatable-api.html" class="sidebar-link"><i
                                            class="mdi mdi-blur-linear"></i><span class="hide-menu"> API</span></a></li>
                                <li class="sidebar-item"><a href="table-datatable-advanced.html" class="sidebar-link"><i
                                            class="mdi mdi-border-style"></i><span class="hide-menu"> Advanced
                                            Initialisation</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-jsgrid.html" aria-expanded="false"><i class="mdi mdi-border-top"></i><span
                                    class="hide-menu">Table Jsgrid</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-responsive.html" aria-expanded="false"><i
                                    class="mdi mdi-border-style"></i><span class="hide-menu">Table Responsive</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-footable.html" aria-expanded="false"><i
                                    class="mdi mdi-tab-unselected"></i><span class="hide-menu">Table Footable</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-editable.html" aria-expanded="false"><i class="mdi mdi-table-edit"></i><span
                                    class="hide-menu">Table Editable</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-bootstrap.html" aria-expanded="false"><i
                                    class="mdi mdi-border-outside"></i><span class="hide-menu">Table
                                    Bootstrap</span></a></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Charts</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-morris.html" aria-expanded="false"><i
                                    class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Morris
                                    Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-flot.html" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu"> Flot Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-chart-js.html" aria-expanded="false"><i class="mdi mdi-svg"></i><span
                                    class="hide-menu">Chartjs</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-sparkline.html" aria-expanded="false"><i
                                    class="mdi mdi-chart-histogram"></i><span class="hide-menu">Sparkline
                                    Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-chartist.html" aria-expanded="false"><i class="mdi mdi-blur"></i><span
                                    class="hide-menu">Chartis Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-chemical-weapon"></i><span class="hide-menu">C3 Charts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="chart-c3-axis.html" class="sidebar-link"><i
                                            class="mdi mdi-arrange-bring-to-front"></i> <span class="hide-menu">Axis
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-arrange-send-to-back"></i> <span class="hide-menu">Bar
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-data.html" class="sidebar-link"><i
                                            class="mdi mdi-backup-restore"></i> <span class="hide-menu">Data
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-line.html" class="sidebar-link"><i
                                            class="mdi mdi-backburger"></i> <span class="hide-menu">Line
                                            Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Echarts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="chart-echart-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-line"></i> <span class="hide-menu">Basic
                                            Charts</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-scatterplot-hexbin"></i> <span class="hide-menu">Bar
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-pie-doughnut.html"
                                        class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span
                                            class="hide-menu">Pie &amp; Doughnut Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Sample
                                Pages</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-cart-outline"></i><span class="hide-menu">Ecommerce Pages</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="eco-products.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-variant"></i> <span
                                            class="hide-menu">Products</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-cart.html" class="sidebar-link"><i
                                            class="mdi mdi-cart"></i> <span class="hide-menu">Products Cart</span></a>
                                </li>
                                <li class="sidebar-item"><a href="eco-products-edit.html" class="sidebar-link"><i
                                            class="mdi mdi-cart-plus"></i> <span class="hide-menu">Products
                                            Edit</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-burst"></i> <span class="hide-menu">Product
                                            Details</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-orders.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-pie"></i> <span class="hide-menu">Product
                                            Orders</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-checkout.html" class="sidebar-link"><i
                                            class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Products
                                            Checkout</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">Sample Pages </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="starter-kit.html" class="sidebar-link"><i
                                            class="mdi mdi-crop-free"></i> <span class="hide-menu">Starter
                                            Kit</span></a></li>
                                <li class="sidebar-item"><a href="pages-animation.html" class="sidebar-link"><i
                                            class="mdi mdi-debug-step-over"></i> <span
                                            class="hide-menu">Animation</span></a></li>
                                <li class="sidebar-item"><a href="pages-search-result.html" class="sidebar-link"><i
                                            class="mdi mdi-search-web"></i> <span class="hide-menu">Search
                                            Result</span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-iris"></i> <span class="hide-menu">Gallery</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-treeview.html" class="sidebar-link"><i
                                            class="mdi mdi-file-tree"></i> <span class="hide-menu">Treeview</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-block-ui.html" class="sidebar-link"><i
                                            class="mdi mdi-codepen"></i> <span class="hide-menu">Block UI</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-session-timeout.html" class="sidebar-link"><i
                                            class="mdi mdi-timer-off"></i> <span class="hide-menu">Session
                                            Timeout</span></a></li>
                                <li class="sidebar-item"><a href="pages-session-idle-timeout.html"
                                        class="sidebar-link"><i class="mdi mdi-timer-sand-empty"></i> <span
                                            class="hide-menu">Session Idle Timeout</span></a></li>
                                <li class="sidebar-item"><a href="pages-utility-classes.html" class="sidebar-link"><i
                                            class="mdi mdi-tune"></i> <span class="hide-menu">Helper Classes</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-maintenance.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-iris"></i> <span class="hide-menu">Maintenance
                                            Page</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-circle"></i><span class="hide-menu">Authentication</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="authentication-login1.html" class="sidebar-link"><i
                                            class="mdi mdi-account-key"></i><span class="hide-menu"> Login </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-login2.html" class="sidebar-link"><i
                                            class="mdi mdi-account-key"></i><span class="hide-menu"> Login 2 </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register1.html" class="sidebar-link"><i
                                            class="mdi mdi-account-plus"></i><span class="hide-menu">
                                            Register</span></a></li>
                                <li class="sidebar-item"><a href="authentication-register2.html" class="sidebar-link"><i
                                            class="mdi mdi-account-plus"></i><span class="hide-menu"> Register
                                            2</span></a></li>
                                <li class="sidebar-item"><a href="authentication-lockscreen.html"
                                        class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu">
                                            Lockscreen</span></a></li>
                                <li class="sidebar-item"><a href="authentication-recover-password.html"
                                        class="sidebar-link"><i class="mdi mdi-account-convert"></i><span
                                            class="hide-menu"> Recover password</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-user-card.html" class="sidebar-link"><i
                                            class="mdi mdi-account-box"></i> <span class="hide-menu"> User Card
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-profile.html" class="sidebar-link"><i
                                            class="mdi mdi-account-network"></i><span class="hide-menu"> User
                                            Profile</span></a></li>
                                <li class="sidebar-item"><a href="ui-user-contacts.html" class="sidebar-link"><i
                                            class="mdi mdi-account-star-variant"></i><span class="hide-menu"> User
                                            Contact</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-ungroup"></i><span
                                    class="hide-menu">Invoice</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-triangle"></i><span class="hide-menu"> Invoice Layout
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice-list.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-rectangle"></i><span class="hide-menu"> Invoice
                                            List</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map"></i><span
                                    class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="map-google.html" class="sidebar-link"><i
                                            class="mdi mdi-google-maps"></i><span class="hide-menu"> Google Map
                                        </span></a></li>
                                <li class="sidebar-item"><a href="map-vector.html" class="sidebar-link"><i
                                            class="mdi mdi-map-marker-radius"></i><span class="hide-menu"> Vector
                                            Map</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i> <span class="hide-menu"> Material Icons
                                        </span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Fontawesome
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-themify.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Themify
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-weather.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-cloudy"></i><span class="hide-menu"> Weather
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><i
                                            class="mdi mdi mdi-image-broken-variant"></i> <span class="hide-menu">
                                            Simple Line icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-flag.html" class="sidebar-link"><i
                                            class="mdi mdi-flag-triangle"></i><span class="hide-menu"> Flag
                                            Icons</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-apple-safari"></i><span class="hide-menu">Timeline</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="timeline-center.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-fast"></i> <span class="hide-menu"> Center Timeline
                                        </span></a></li>
                                <li class="sidebar-item"><a href="timeline-horizontal.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal
                                            Timeline</span></a></li>
                                <li class="sidebar-item"><a href="timeline-left.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-in"></i><span class="hide-menu"> Left
                                            Timeline</span></a></li>
                                <li class="sidebar-item"><a href="timeline-right.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-start"></i><span class="hide-menu"> Right
                                            Timeline</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-email-open-outline"></i><span class="hide-menu">Email
                                    Template</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="email-templete-alert.html" class="sidebar-link"><i
                                            class="mdi mdi-message-alert"></i> <span class="hide-menu"> Alert
                                        </span></a></li>
                                <li class="sidebar-item"><a href="email-templete-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-message-bulleted"></i><span class="hide-menu">
                                            Basic</span></a></li>
                                <li class="sidebar-item"><a href="email-templete-billing.html" class="sidebar-link"><i
                                            class="mdi mdi-message-draw"></i><span class="hide-menu"> Billing</span></a>
                                </li>
                                <li class="sidebar-item"><a href="email-templete-password-reset.html"
                                        class="sidebar-link"><i class="mdi mdi-message-bulleted-off"></i><span
                                            class="hide-menu"> Password-Reset</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span
                                    class="hide-menu">Error Pages</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="error-400.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i> <span class="hide-menu"> Error 400
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            403</span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            404</span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            500</span></a></li>
                                <li class="sidebar-item"><a href="error-503.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            503</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Multi level
                                    dd</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1</span></a>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span
                                            class="hide-menu">Menu 1.3</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.1</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.2</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.3</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.4</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-playlist-check"></i><span class="hide-menu"> item
                                            1.4</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="https://www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/Documentation/document.html" aria-expanded="false"><i
                                    class="mdi mdi-content-paste"></i><span class="hide-menu">Documentation</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="authentication-login1.html" aria-expanded="false"><i
                                    class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Dashboard</h3>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex mr-3 ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                                <h4 class="mt-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>LAST MONTH</small></h6>
                                <h4 class="mt-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Picture</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item px-2">
                                                        <h6 class="text-success"><i
                                                                class="fa fa-circle font-10 mr-2 "></i>Ample</h6>
                                                    </li>
                                                    <li class="list-inline-item px-2">
                                                        <h6 class="text-info"><i
                                                                class="fa fa-circle font-10 mr-2"></i>Pixel</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">QR Code </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div class="card-body text-center border-top">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 mr-2 "></i>Mobile</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class=" text-primary"><i class="fa fa-circle font-10 mr-2"></i>Desktop</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class=" text-success"><i class="fa fa-circle font-10 mr-2"></i>Tablet</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                   
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./assets_new/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets_new/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets_new/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="./dist/js/app.min.js"></script>
    <script src="./dist/js/app.init.mini-sidebar.js"></script>
    <script src="./dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets_new/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./assets_new/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- chartist chart -->
    <script src="./assets_new/libs/chartist/dist/chartist.min.js"></script>
    <script src="./assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="./assets_new/libs/d3/dist/d3.min.js"></script>
    <script src="./assets_new/libs/c3/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="./dist/js/pages/dashboards/dashboard1.js"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 01:41:16 GMT -->
</html>