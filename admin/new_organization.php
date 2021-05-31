<?php
    include_once "../handlers/database_connection.php";
?>
<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Expertrans EI CRM</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.css">
    <link rel="stylesheet" href="../assets/fonts/linearicons.css">
    <link rel="stylesheet" href="../assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="../assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="../assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="../assets/css/shreerang-material.css">
    <link rel="stylesheet" href="../assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="../assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/libs/flot/flot.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Libs -->
    <link rel="stylesheet" href="../assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="../assets/css/pages/authentication.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

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
                        <img src="../assets/img/favicon.png" alt="Brand Logo" class="img-fluid" style="width: 50px; height: 50px;">
                    </span>
                </div>
                <div class="sidenav-divider mt-0"></div>
                <ul class="sidenav-inner py-1">
                    <li class="sidenav-header small font-weight-semibold">Customer Relational Management</li>
                    <li class="sidenav-item">
                        <a href="index.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Quản lý khách hàng</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="index.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-globe"></i>
                            <div>Quản lý tổ chức</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="users.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>Quản lý người dùng</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="../logout.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-lock"></i>
                            <div>Đăng xuất</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="layout-container">
            <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">
                <a href="index.php" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                    <span class="app-brand-logo demo">
                        <img src="../assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
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
                                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Quản trị viên</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="../logout.php" class="dropdown-item">
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
                        <h4 class="font-weight-bold py-3 mb-0">Thêm tổ chức mới</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php?id=<?php echo $id ?>"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="organizations.php">Quản lý tổ chức</a></li>
                                <li class="breadcrumb-item"><a href="new_organization.php">Thêm mới tổ chức</a></li>
                            </ol>
                        </div>
                        <div class="card mb-4">
                            <h6 class="card-header">Thêm tổ chức mới</h6>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Họ và tên tổ chức</label>
                                            <input type="text" class="form-control" required id="name">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6" style="display:none;">
                                            <label class="form-label">ID</label>
                                            <input type="text" class="form-control" id="uid" value="<?php echo $id; ?>">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Số điện thoại tổ chức</label>
                                            <input type="number" class="form-control" required id="phone">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Địa chỉ tổ chức</label>
                                            <input type="text" class="form-control" id="address">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Email tổ chức</label>
                                            <input type="email" class="form-control" id="email">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-1">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Họ và tên liên hệ 1</label>
                                                <input type="text" class="form-control" required id="contact1-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Số điện thoại liên hệ 1</label>
                                                <input type="number" class="form-control" required id="contact1-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email liên hệ 1</label>
                                                <input type="email" class="form-control" id="contact1-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-1" style="margin-left: 40%; margin-top: 3%;">Ẩn người liên hệ</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-2">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Họ và tên liên hệ 2</label>
                                                <input type="text" class="form-control" required id="contact2-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Số điện thoại liên hệ 2</label>
                                                <input type="number" class="form-control" required id="contact2-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email liên hệ 2</label>
                                                <input type="email" class="form-control" id="contact2-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-2" style="margin-left: 40%; margin-top: 3%;">Ẩn người liên hệ</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-3">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Họ và tên liên hệ 3</label>
                                                <input type="text" class="form-control" required id="contact3-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Số điện thoại liên hệ 3</label>
                                                <input type="number" class="form-control" required id="contact3-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email liên hệ 3</label>
                                                <input type="email" class="form-control" id="contact3-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-3" style="margin-left: 40%; margin-top: 3%;">Ẩn người liên hệ</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-4">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Họ và tên liên hệ 4</label>
                                                <input type="text" class="form-control" required id="contact4-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Số điện thoại liên hệ 4</label>
                                                <input type="number" class="form-control" required id="contact4-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email liên hệ 4</label>
                                                <input type="email" class="form-control" id="contact4-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-4" style="margin-left: 40%; margin-top: 3%;">Ẩn người liên hệ</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-5">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Họ và tên liên hệ 5</label>
                                                <input type="text" class="form-control" required id="contact5-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Số điện thoại liên hệ 5</label>
                                                <input type="number" class="form-control" required id="contact5-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email liên hệ 5</label>
                                                <input type="email" class="form-control" id="contact5-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-5" style="margin-left: 40%; margin-top: 3%;">Ẩn người liên hệ</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-info" id="add_contact">Thêm người liên hệ</button>
                                    <div class="form-row" style="margin: 40px 0;">
                                        <label class="col-form-label col-sm-2">Mô tả</label>
                                        <div class="col-sm-10" style="border-style:groove;">
                                            <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 200px; " id="note"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Tình trạng</label>
                                            <select class="custom-select" id="select-tinhtrang">
                                                <option value="moi" selected>Mới</option>
                                                <option value="quantam">Quan tâm</option>
                                                <option value="tiemnang">Tiềm năng</option>
                                                <option value="datlichhen">Đặt lịch hẹn</option>
                                                <option value="hocthu">Học thử</option>
                                                <option value="nhaphoc">Nhập học</option>
                                                <option value="chuanghemay">Chưa nghe máy</option>
                                                <option value="saisodienthoai">Sai số điện thoại</option>
                                                <option value="saidoituong">Sai đối tượng</option>
                                                <option value="khongconhucau">Không có nhu cầu</option>
                                                <option value="sapchot">Sắp chốt</option>
                                                <option value="kyhopdong">Ký hợp đồng</option>
                                                <option value="dathutiendot1">Đã thu tiền đợt 1</option>
                                                <option value="dathutiendot2">Đã thu tiền đợt 2</option>
                                                <option value="doiphanhoi">Đợi phản hồi</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Nhóm khách hàng</label>
                                            <select class="custom-select" id="select-nhomkhachhang">
                                                <option value="duhocngheduc">Du học nghề Đức</option>
                                                <option value="cddieuduong">CĐ Điều dưỡng</option>
                                                <option value="cdcokhi">CĐ Cơ khí</option>
                                                <option value="cdnhahangkhachsan">CĐ Nhà hàng - Khách sạn</option>
                                                <option value="chuyendoibang">Chuyển đổi bằng</option>
                                                <option value="nganhlaitau">Ngành lái tàu</option>
                                                <option value="nganhxaydung">Ngành xây dựng</option>
                                                <option value="chuyendoibangthodien">Chuyển đổi bằng thợ điện</option>
                                                <option value="chuyendoibangcntt">Chuyển đổi bằng công nghệ thông tin</option>
                                                <option value="daotaotiengduc">Đào tạo tiếng Đức</option>
                                                <option value="a1">Tiếng Đức A1</option>
                                                <option value="b1">Ôn thi B1</option>
                                                <option value="doitacnguon">Đối tác nguồn</option>
                                                <option value="vpdd">Văn phòng đại diện</option>
                                                <option value="congtyduhoc">Công ty du học</option>
                                                <option value="ctv">Cộng tác viên</option>
                                                <option value="xkld">Xuất khẩu lao động</option>
                                                <option value="doitacdaungoai">Đối tác đầu ngoại</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Nguồn khách hàng</label>
                                            <select class="custom-select" id="select-nguonkhachhang">
                                                <option value="website">Website</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="google">Google</option>
                                                <option value="hotline">Hotline</option>
                                                <option value="doitac">Đối tác</option>
                                                <option value="nguoncanhan">Nguồn cá nhân</option>
                                                <option value="nguongioithieu">Nguồn giới thiệu</option>
                                                <option value="vpdd">Nguồn VPDD</option>
                                                <option value="dkt">Đinh Khắc Tuấn</option>
                                                <option value="eimarketing">EI Marketing</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group filter-component">
                                                <label class="form-label">Người phụ trách</label>
                                                <select ng-model="name" class="form-control input-lg" data-live-search="true" name="select-manager" id="select-manager" title="Chọn người phụ trách">

                                                </select>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-lg btn-outline-success" style="float:right; margin: 10px 40px;" id="submit-btn">Xác nhận</button>
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

    <script src="../assets/js/pace.js"></script>
    <script src="../assets/libs/popper/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/sidenav.js"></script>
    <script src="../assets/js/layout-helpers.js"></script>
    <script src="../assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="../assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/libs/eve/eve.js"></script>
    <script src="../assets/libs/flot/flot.js"></script>
    <script src="../assets/libs/flot/curvedLines.js"></script>
    <script src="../assets/libs/chart-am4/core.js"></script>
    <script src="../assets/libs/chart-am4/charts.js"></script>
    <script src="../assets/libs/chart-am4/animated.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        var contact_count = 1;
        $(document).ready(function(){
            $('#add_contact').on('click', function(){
                if(contact_count < 6){
                    $("#contact-" + contact_count).css("display", "block");
                    contact_count++;
                }
            });

            $('#select-manager').selectpicker();

            $('#remove-contact-1').on('click', function(){
                $("#contact-1").css("display", "none");
                contact_count--;
            });
            $('#remove-contact-2').on('click', function(){
                $("#contact-2").css("display", "none");
                contact_count--;
            });
            $('#remove-contact-3').on('click', function(){
                $("#contact-3").css("display", "none");
                contact_count--;
            });
            $('#remove-contact-4').on('click', function(){
                $("#contact-4").css("display", "none");
                contact_count--;
            });
            $('#remove-contact-5').on('click', function(){
                $("#contact-5").css("display", "none");
                contact_count--;
            });

            $(document).on('keyup', '.filter-component .bs-searchbox input', function (e) {
                var search_value = e.target.value;
                $.ajax({
                    url: '../handlers/load_curator_admin.php',
                    method: 'post',
                    data:{
                        value: search_value
                    },success: function(data){
                        $('#select-manager').html(data);
                        $('#select-manager').selectpicker('refresh');
                    }
                });
            });

            $('#submit-btn').on('click', function(){
                var name = $("#name").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var email1 = $("#contact1-email").val();
                var name1 = $("#contact1-name").val();
                var phone1 = $("#contact1-phone").val();
                var email2 = $("#contact2-email").val();
                var name2 = $("#contact2-name").val();
                var phone2 = $("#contact2-phone").val();
                var email3 = $("#contact3-email").val();
                var name3 = $("#contact3-name").val();
                var phone3 = $("#contact3-phone").val();
                var email4 = $("#contact4-email").val();
                var name4 = $("#contact4-name").val();
                var phone4 = $("#contact4-phone").val();
                var email5 = $("#contact5-email").val();
                var name5 = $("#contact5-name").val();
                var phone5 = $("#contact5-phone").val();
                var note = $("#note").val();
                var address = $("#address").val();
                var nhomkhachhang = $("#select-nhomkhachhang").val();
                var nguonkhachhang = $("#select-nguonkhachhang").val();
                var nguoiphutrach = $("#select-manager").val();
                var tinhtrang = $("#select-tinhtrang").val();
                $.ajax({
                    url: "../handlers/add_new_organization_admin.php",
                    method: "post",
                    data:{
                        submit: 'true',
                        id: "1",
                        name: name,
                        phone:phone,
                        email1: email1,
                        name1: name1,
                        phone1:phone1,
                        email2: email2,
                        name2: name2,
                        phone2:phone2,
                        email3: email3,
                        name3: name3,
                        phone3:phone3,
                        email4: email4,
                        name4: name4,
                        phone4:phone4,
                        email5: email5,
                        name5: name5,
                        phone5:phone5,
                        email: email,
                        note: note,
                        address: address,
                        tinhtrang:tinhtrang,
                        nhomkhachhang: nhomkhachhang,
                        nguoiphutrach: nguoiphutrach,
                        nguonkhachhang: nguonkhachhang
                    },
                    success: function(data){
                        console.log(data);
                        if(data == "ok"){
                            console.log("ok");
                            alert("Thêm tổ chức mới thành công!");
                            document.location.href = 'organizations.php';
                        }else if(data == 'empty'){
                            console.log("empty");
                            alert("Dữ liệu không được để trống!");
                            $("#name").addClass("is-invalid");
                            $("#phone").addClass("is-invalid");
                        }else{
                            console.log("error");
                            alert("Đã có lỗi xảy ra, xin vui lòng thử lại!");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
