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
    <link rel="icon" type="image/png" sizes="16x16" href="https://pack1.sakorncable.com/assets_new/images/favicon.png">
    <title>KMUTNB  Temperature measurement </title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="https://pack1.sakorncable.com/assets_new/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/assets_new/libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://pack1.sakorncable.com/dist/css/style.min.css" rel="stylesheet">
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
                
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                 
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
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
    <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://pack1.sakorncable.com/assets_new/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="https://pack1.sakorncable.com/dist/js/app.min.js"></script>
    <script src="https://pack1.sakorncable.com/dist/js/app.init.mini-sidebar.js"></script>
    <script src="https://pack1.sakorncable.com/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="https://pack1.sakorncable.com/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://pack1.sakorncable.com/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://pack1.sakorncable.com/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- chartist chart -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/chartist/dist/chartist.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/d3/dist/d3.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/c3/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="https://pack1.sakorncable.com/dist/js/pages/dashboards/dashboard1.js"></script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    <script type="text/javascript">
        

      $(function(){

        

        setInterval(function(){ 


          $.post("https://pack1.sakorncable.com/index.php/devices",function(data,status){

            var object = JSON.parse(data);
            //console.log(object[0]);
            var APPURL = "https://pack1.sakorncable.com/index.php/devices/app/"+object[0].ID;

            $("#ImageCapture").attr("src",object[0].URLIMG);
            $("#QRCodeApp").attr("src","https://api.qrserver.com/v1/create-qr-code/?data="+APPURL+"&size=220x220&margin=0");
            $("#Temp").text(object[0].Temp);


          });
          //console.log("update");

        }, 1000);



      });



    </script>


</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 01:41:16 GMT -->
</html>