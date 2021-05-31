<?php

?>
<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Đăng ký</title>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Libs -->
    <link rel="stylesheet" href="../assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="../assets/css/pages/authentication.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->


</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="../assets/img/favicon.png" alt="Brand Logo" class="img-fluid">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <!-- [ Form ] Start -->
            <form class="my-5" action="../handlers/add_new_user.php" method="post">
                <div class="form-group">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="name" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                    <small class="invalid-feedback" style="display:none;" id="email-existed">Email đã tồn tại trong hệ thống</small>
                    <small class="invalid-feedback" style="display:none;" id="email-empty">Email đã tồn tại trong hệ thống</small>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group filter-component">
                    <label class="form-label">Người quản lý</label>
                    <select ng-model="name" class="form-control input-lg" data-live-search="true" name="select-manager" id="select-manager" title="Chọn người quản lý">

                    </select>
                    <div class="clearfix"></div>
                </div>
                <small class="invalid-feedback" style="display:none;" id="error-display"></small>
                <!-- <div class="form-group">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="pass" required>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" id="rpt-pass" required>
                    <small class="invalid-feedback" style="display:none;" id="rpt-pass-not-match">Mật khẩu nhập lại không khớp</small>
                    <div class="clearfix"></div>
                </div> -->
                <button type="button" class="btn btn-primary btn-block mt-4" id="submit-btn">Tạo tài khoản</button>
            </form>
            <!-- [ Form ] End -->
<!-- 
            <div class="text-center text-muted">
                Đã có tài khoản ?
                <a href="login.php">Đăng nhập</a>
            </div> -->

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
    <script src="../assets/js/pace.js"></script>
    <script src="../assets/libs/popper/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/sidenav.js"></script>
    <script src="../assets/js/layout-helpers.js"></script>
    <script src="../assets/js/material-ripple.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


    <!-- Libs -->
    <script src="../assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script>
        $(document).ready(function(){
            $('#select-manager').selectpicker();

            $(document).on('keyup', '.filter-component .bs-searchbox input', function (e) {
                var search_value = e.target.value;
                $.ajax({
                    url: '../handlers/load_register_manager.php',
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
                var select_manager = $('#select-manager').val();
                $.ajax({
                    url: "../handlers/add_new_user.php",
                    method: "post",
                    data:{
                        submit: 'true',
                        name: name,
                        phone:phone,
                        email: email,
                        manager: select_manager
                    },
                    success: function(data){
                        if(data == "error"){
                            console.log("error");
                            $("#error-display").css('display', 'block');
                            $("#error-display").html("Đã có lỗi xảy ra, xin vui lòng thử lại!");
                            
                        }else if(data == "manager_empty"){
                            $("#error-display").css('display', 'block');
                            $("#error-display").html("Người quản lý không được để trống!");
                        }else if(data == "existed"){
                            console.log("existed");
                            $("#email").addClass("is-invalid");
                            $("#email-existed").css('display', 'block');
                            $("#pass").val("");
                            $("#rpt-pass").val("");
                        }else if(data == "empty"){
                            $("#error-display").css('display', 'block');
                            $("#error-display").html("Dữ liệu không được để trống!");
                        }else{
                            if(confirm("Tạo tài khoản thành công, mật khẩu là: " + data)){
                                document.location.href = "users.php";
                            }
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
