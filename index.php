<?php
    include_once 'handlers/database_connection.php';
    include_once 'handlers/main_functions.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            $search = "none";
            $sql = "select c.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name from customer c, users u1, users u2 where c.nguoitao = u1.id and c.tinhtrang = '$type' c.nguoiphutrach = u2.id and c.nguoitao = '$id' order by id desc limit 10";
            $sql_count_record = "select count(id) as count from customer where tinhtrang = '$type' and nguoitao = '$id'";
            $result_count_record = mysqli_query($connection, $sql_count_record);
            $row_count = mysqli_fetch_assoc($result_count_record);
            $count = intval($row_count['count']);
            $max_pages = ceil($count / 10);
        }else if(isset($_GET['search'])){
            $type = 'none';
            $search = $_GET['search'];
            $sql = "select c.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name from customer c, users u1, users u2 where c.nguoitao = u1.id and c.name like %'".$search."'% and c.nguoiphutrach = u2.id and c.nguoitao = '$id' order by id desc limit 10";
            $sql_count_record = "select count(id) as count from customer where name like '%".$search."%' and nguoitao = '$id'";
            $result_count_record = mysqli_query($connection, $sql_count_record);
            $row_count = mysqli_fetch_assoc($result_count_record);
            $count = intval($row_count['count']);
            $max_pages = ceil($count / 10);
        }else{
            $type = 'none';
            $search = "none";
            $sql = "select c.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name from customer c, users u1, users u2 where c.nguoitao = u1.id and c.nguoiphutrach = u2.id and c.nguoitao = '$id' order by id desc limit 10";
            $sql_count_record = "select count(id) as count from customer where nguoitao = '$id'";
            $result_count_record = mysqli_query($connection, $sql_count_record);
            $row_count = mysqli_fetch_assoc($result_count_record);
            $count = intval($row_count['count']);
            $max_pages = ceil($count / 10);
        }

        $result = mysqli_query($connection, $sql);

        $sql2 = "select * from users where id = '$id'";
        $result2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
    }else{
        header("Location: login.php");
    }

?>

<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Expertrans EI CRM</title>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
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
                <a href="index.php?id=<?php echo $id; ?>" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
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
                            <span>
                                <form style="width: 550px;">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Tìm kiếm khách hàng..." style="width: 350px;" id="search-input" style="display:inline-block;">
                                    <button type="button" class="btn btn-info" onclick="search_contact('<?php echo $id; ?>')"><span class="spinner-border spinner-border-sm" role="status" id="submit" style="display:inline-block;" ></span>Tìm kiếm</button>
                                </form>
                            </span>
                        </label>
                    </div>

                    <div class="navbar-nav align-items-lg-center ml-auto">
                        <!-- Divider -->
                        <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                        <div class="demo-navbar-user nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php echo $row2['email']; ?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="user.php?id=<?php echo $id ?>" class="dropdown-item">
                                    <i class="feather icon-user text-muted"></i> &nbsp; Thông tin cá nhân</a>
                                <a href="change_pass.php?id=<?php echo $id; ?>" class="dropdown-item change-pass" >
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
                        <h4 class="font-weight-bold py-3 mb-0">Quản lý khách hàng</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php?id=<?php echo $id ?>"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="index.php?id=<?php echo $id ?>">Quản lý khách hàng</a></li>
                            </ol>
                        </div>
                        <!-- table here -->
                        <div style="margin: 15px;">
                            <button type="button" class="btn btn-lg btn-success" onclick="new_cus('<?php echo $id; ?>')">
                                <span class="pe-7s-users"></span>&nbsp;&nbsp;Thêm mới
                            </button>
                        </div>
                        <div class="form-group col-md-6" style="display:none;">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control" id="uid" value="<?php echo $id; ?>">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6" style="display:none;">
                            <label class="form-label">Page</label>
                            <input type="text" class="form-control" id="page-number" value="1">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6" style="display:none;">
                            <label class="form-label">Max-page</label>
                            <input type="text" class="form-control" id="page-max" value="<?php echo $max_pages ?>">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6" style="display:none;">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control" id="cus-type" value="<?php echo $type ?>">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6" style="display:none;">
                            <label class="form-label">Search</label>
                            <input type="text" class="form-control" id="search-value" value="<?php echo $search ?>">
                            <div class="clearfix"></div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="demo-inline-spacing mt-3">
                                    <button type="button" class="btn btn-outline-secondary" id="all">Tất cả</button>
                                    <button type="button" class="btn btn-outline-info" id="moi">Mới</button>
                                    <button type="button" class="btn indigo-btn" id="quantam">Quan tâm</button>
                                    <button type="button" class="btn btn-outline-success" id="tiemnang">Tiềm năng</button>
                                    <button type="button" class="btn btn-outline-warning" id="datlichhen">Đặt lịch hẹn</button>
                                    <button type="button" class="btn btn-outline-primary" id="hocthu">Học thử</button>
                                    <button type="button" class="btn btn-outline-danger" id="saisodienthoai">Sai số điện thoại</button>
                                    <button type="button" class="btn btn-outline-dark" id="chuanghemay">Chưa nghe máy</button>
                                    <button type="button" class="btn pink-btn"  id="saidoituong">Sai đối tượng</button>
                                    <button type="button" class="btn teal-btn" id="khongconhucau">Không có nhu cầu</button>
                                    <button type="button" class="btn indigo-btn" id="sapchot">Sắp chốt</button>
                                    <button type="button" class="btn btn-outline-dark" id="kyhopdong">Ký hợp đồng</button>
                                    <button type="button" class="btn btn-outline-dark" id="dathutiendot1">Đã thu tiền đợt 1</button>
                                    <button type="button" class="btn btn-outline-dark" id="dathutiendot2">Đợi phản hồi</button>
                                    <button type="button" class="btn btn-outline-dark" id="dungquen">Đừng quên</button>
                                </div>
                            </div>
                            <div class="static-table">
                                <table class="table card-table" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="headcol1" style="background-color: #f1f1f2;">#</th>
                                            <th class="headcol2" style="background-color: #f1f1f2;">Tên khách hàng</th>
                                            <th>Tình trạng</th>
                                            <th>Điện thoại</th>
                                            <th>Người phụ trách</th>
                                            <th class="note-column">Mô tả</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Nhóm khách hàng</th>
                                            <th>Nguồn khách hàng</th>
                                            <th>Người tạo</th>
                                            <th>Ngày tạo</th>
                                            <th>Chỉnh sửa</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contact-data">
                                        <?php
                                            $index = 1;
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                        <th scope="row" class="headcol1" style="background-color: white;"><?php echo $index; ?></th>
                                            <td class="headcol2"><b style="color:#1E9FF2; cursor:pointer;" class="viewData" id="cus-<?php echo $row['id']; ?>"><?php echo $row['name'] ?></b></td>
                                            <td><?php echo formatStatus($row['tinhtrang']); ?></td>
                                            <td><?php echo $row['dienthoai'] ?></td>
                                            <td><?php echo $row['nguoiphutrach_name'] ?></td>
                                            <td class="note-column"><?php echo $row['mota'] ?></td>
                                            <td><?php echo $row['diachi'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo formatType($row['nhomkhachhang']); ?></td>
                                            <td><?php echo formatSource($row['nguonkhachhang']); ?></td>
                                            <td><?php echo $row['nguoitao_name'] ?></td>
                                            <td><?php echo formatDate($row['timestamp']) ?></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-primary editContact" style="margin-left: 10px;" id="edit-<?php echo $row['id'];?>">Sửa</button>
                                                <button type="button" class="btn btn-sm btn-outline-danger removeContact" style="margin-left: 10px;" id="remove-<?php echo $row['id'];?>">Xóa</button>
                                            </td>
                                        </tr>
                                        <?php
                                            $index++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:center; align-items: center; margin-top: 15px;">
                            <div style="display:inline-block;">
                                <button type="button" class="btn btn-outline-success" style="margin-right: 10px;" id="prev-page"><<</button>
                                <button type="button" class="btn btn-outline-success" style="margin-left: 10px;" id="next-page">>></button>                            
                            </div>
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <div class="modal fade" id="dataDetail" tabindex="-1" role="dialog" aria-labelledby="dataDetailLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="data">

                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        function new_cus(uid){
            document.location.href = "new.php?id=" + uid;
        }
        function search_contact(uid){
            var val = document.getElementById("search-input").value;
            document.location.href = "index.php?id=" + uid + "&search=" + val;
        }
    </script>
    <script>
        $(document).ready(function(){
            var uid = $("#uid").val();
            $(document).on('keyup', '.filter-component .bs-searchbox input', function (e) {
                var search_value = e.target.value;
                $.ajax({
                    url: 'handlers/load_curator_user.php',
                    method: 'post',
                    data:{
                        value: search_value,
                        id: uid
                    },success: function(data){
                        $('#select-manager').html(data);
                        $('#select-manager').selectpicker('refresh');
                    }
                });
            });
            $(document).on('click', '.viewData', function(){
                var request_id = $(this).attr("id");
                $.ajax({
                    url: "handlers/contact_detail.php",
                    method: "post",
                    data:{
                        id: request_id
                    },success: function(data){
                        $('#data').html(data);
                        $('#dataDetail').modal('show');
                        $('#select-manager').selectpicker();
                    }
                });
            });
            $(document).on('click', '#next-page', function(){
                var page = parseInt($('#page-number').val());
                var max_page = parseInt($('#page-max').val());
                var type = $("#cus-type").val();
                var search = $('#search-value').val();
                var uid = $("#uid").val();
                if(page < max_page){
                    $.ajax({
                        url: "../handlers/contact_pagination_user.php",
                        method:"post",
                        data:{
                            page: page,
                            request: 'next',
                            type: type,
                            search:search,
                            id:uid
                        },success: function(data){
                            $("#contact-data").empty();
                            $("#contact-data").append(data);
                            $("#page-number").attr("value", parseInt(page) + 1);
                        }                    
                    })
                }
            });
            $(document).on('click', '#prev-page', function(){
                var page = parseInt($('#page-number').val());
                var max_page = parseInt($('#page-max').val());
                var type = $("#cus-type").val();
                var search = $('#search-value').val();
                var uid = $("#uid").val();
                if(parseInt($('#page-number').val()) != 1){
                    $.ajax({
                        url: "../handlers/contact_pagination_user.php",
                        method:"post",
                        data:{
                            page: page,
                            request: 'prev',
                            type: type,
                            search:search,
                            id:uid
                        },success: function(data){
                            $("#contact-data").empty();
                            $("#contact-data").append(data);
                            $("#page-number").attr("value", parseInt(page) - 1);
                        }                    
                    })
                }
            });
            $(document).on('click', '.editContact', function(){
                var uid = $("#uid").val();
                var cus_id = $(this).attr("id").substring(5);
                var name = $("#edit-name").val();
                var phone = $("#edit-phone").val();
                var email = $("#edit-email").val();
                var note = $("#edit-note").val();
                var address = $("#edit-address").val();
                var nhomkhachhang = $("#select-nhomkhachhang").val();
                var nguonkhachhang = $("#select-nguonkhachhang").val();
                var nguoiphutrach = $("#select-manager").val();
                var tinhtrang = $("#select-tinhtrang").val();
                $.ajax({
                    url: "handlers/edit_contact_user.php",
                    method: "post",
                    data:{
                        submit: 'true',
                        cus_id:cus_id,
                        name: name,
                        phone:phone,
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
                            $('#dataDetail').modal('hide');
                            alert("Chỉnh sửa thông tin khách hàng thành công!");
                            document.location.href = 'index.php?id=' + uid;
                        }else if(data == 'empty'){
                            console.log("empty");
                            alert("Dữ liệu không được để trống!");
                        }else{
                            console.log("error");
                            alert("Đã có lỗi xảy ra, xin vui lòng thử lại!");
                        }
                    }
                });
            });
            $(document).on('click', '.removeContact', function(){
                var remove_id = $(this).attr("id");
                if(confirm('Bạn có chắc muốn xóa liên hệ này ?')){
                    $(this).closest('tr').remove();
                    $.ajax({
                        url:"handlers/remove_contact_admin.php",
                        method:"POST",
                        data:{
                            remove_id:remove_id
                        },
                        success: function(data){
                            console.log(data);
                            if(data == "ok"){
                                alert("Xóa liên hệ thành công!");
                            }
                        }
                    });
                }
            });
            $('#all').on('click', function(){
                document.location.href = 'index.php?id=' + uid;
            });
            $('#moi').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=moi";
            });
            $('#quantam').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=quantam";
            });
            $('#tiemnang').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=tiemnang";
            });
            $('#datlichhen').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=datlichhen";
            });
            $('#hocthu').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=hocthu";
            });
            $('#saisodienthoai').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=saisodienthoai";
            });
            $('#chuanghemay').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=chuanghemay";
            });
            $('#saidoituong').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=saidoituong";
            });
            $('#khongconhucau').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=khongconhucau";
            });
            $('#sapchot').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=sapchot";
            });
            $('#kyhopdong').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=kyhopdong";
            });
            $('#dathutiendot1').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=dathutiendot1";
            });
            $('#dathutiendot2').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=dathutiendot2";
            });
            $('#dungquen').on('click', function(){
                document.location.href = 'index.php?id=' + uid + "&type=dungquen";
            });
        });
    </script>

</body>

</html>
