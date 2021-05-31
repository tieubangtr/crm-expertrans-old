<?php
    $id = $_GET['id'];
    include_once "handlers/database_connection.php";
    $sql = "select * from users where id = '$id'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    function formatDate($datetime){
        $newDate = date("d/m/Y - H:i:s", strtotime(strval($datetime)));
        return $newDate;
    }
?>
<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Đổi mật khẩu</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/flot/flot.css">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo" style="display:flex; align-items:center; justify-content: center;">
                    <span class="app-brand-logo demo" >
                        <img src="assets/img/favicon.png" alt="Brand Logo" class="img-fluid" style="width: 50px; height: 50px;">
                    </span>
                </div>
                <div class="sidenav-divider mt-0"></div>
                <ul class="sidenav-inner py-1">
                    <li class="sidenav-header small font-weight-semibold">Customer Relational Management</li>
                    <li class="sidenav-item">
                        <a href="index.php?id=<?php echo $id ?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Quản lý khách hàng</div>
                        </a>
                    </li>
                    <li class="sidenav-item ">
                        <a href="organizations.php?id=<?php echo $id ?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-globe"></i>
                            <div>Quản lý tổ chức</div>
                        </a>
                    </li>
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold">Tài khoản</li>
                    <li class="sidenav-item">
                        <a href="user.php?id=<?php echo $id ?>" class="sidenav-link">
                            <i class="sidenav-icon feather icon-type"></i>
                            <div>Thông tin cá nhân</div>
                        </a>
                    </li>

                    <li class="sidenav-item">
                        <a href="change_pass.php?id=<?php echo $id; ?>" class="sidenav-link change-pass">
                            <i class="sidenav-icon feather icon-box"></i>
                            <div>Đổi mật khẩu</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="logout.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-lock"></i>
                            <div>Đăng xuất</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="layout-container">
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                    </a>

                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Tìm kiếm...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php echo $row['email']; ?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="user.php?id=<?php echo $id ?>" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; Thông tin cá nhân</a>
                                    <a href="change_pass.php?id=<?php echo $id ?>" class="dropdown-item" >
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Đổi mật khẩu</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="logout.php" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Thay đổi mật khẩu</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php?id=<?php echo $id ?>"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="user.php?id=<?php echo $id ?>">Tài khoản</a></li>
                                <li class="breadcrumb-item"><a href="change_pass.php?id=<?php echo $id ?>">Đổi mật khẩu</a></li>
                            </ol>
                        </div>
                        <div class="card mb-4">
                            <h6 class="card-header">Thông tin cá nhân</h6>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-2 text-sm-right">Mật khẩu cũ</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="current-pass" autofocus>
                                            <small class="invalid-feedback" style="display:none;" id="pass-not-match">Mật khẩu cũ không khớp</small>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="display:none;">
                                        <label class="col-form-label col-sm-2 text-sm-right">ID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="<?php echo $id ?>" id="uid">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-2 text-sm-right">Mật khẩu mới</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="new-pass"> 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-2 text-sm-right">Nhập lại mật khẩu mới</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="rpt-pass">
                                            <small class="invalid-feedback" style="display:none;" id="rpt-pass-not-match">Mật khẩu nhập lại không khớp</small>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button type="button" class="btn btn-primary" id="changePass-sbmit">Lưu thay đổi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- [ content ] End -->

                

                    <!-- [ Layout footer ] Start -->
                    <nav class="layout-footer footer bg-white">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">&copy; <a href="https://expertrans.edu.vn" class="footer-link" target="_blank">Expertrans EI</a></span>
                            </div>
                        </div>
                    </nav>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/libs/popper/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/layout-helpers.js"></script>
    <script src="assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/libs/eve/eve.js"></script>
    <script src="assets/libs/flot/flot.js"></script>
    <script src="assets/libs/flot/curvedLines.js"></script>
    <script src="assets/libs/chart-am4/core.js"></script>
    <script src="assets/libs/chart-am4/charts.js"></script>
    <script src="assets/libs/chart-am4/animated.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var uid = $("#uid").val();
            $('#changePass-sbmit').on('click', function(){
                var oldPass = $("#current-pass").val();
                var newPass = $("#new-pass").val();
                var rptPass = $("#rpt-pass").val();
                jQuery.ajax({
                    url:"handlers/change_pass_handler.php",
                    method:"post",
                    data:{
                        submit: 'true',
                        old: oldPass,
                        new: newPass,
                        rpt: rptPass,
                        id: uid
                    },
                    success: function(data){
                        console.log(data);
                        if(data == 'ok'){
                            alert("Đổi mật khẩu thành công!");
                        }else if(data == "notMatch"){
                            $("#current-pass").val("");
                            $("#new-pass").addClass("is-invalid");
                            $("#new-pass").val("");
                            $("#rpt-pass").addClass("is-invalid");
                            $("#rpt-pass").val("");
                            $("#rpt-pass-not-match").css('display', 'block');
                        }else if(data == "wrongPass"){
                            $("#current-pass").val("");
                            $("#new-pass").val("");
                            $("#rpt-pass").val("");
                            $("#pass-not-match").css('display', 'block');
                        }else{
                            console.log("error");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
