<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Đăng nhập</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Srthemesvilla" />
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
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
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
                        <img src="assets/img/favicon.png" alt="Brand Logo" class="img-fluid">
                    </div>
                </div>
            </div>

            <form class="my-5">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-end">
                        <span>Mật khẩu</span>
                    </label>
                    <input type="password" class="form-control" id="pass" required>
                    <small class="invalid-feedback" style="display:none;" id="error">Sai tên tài khoản hoặc mật khẩu</small>
                    <div class="clearfix"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center m-0">
                    <button type="button" class="btn btn-primary" id="submit-btn">Đăng nhập</button>
                </div>
            </form>
            <!-- [ Form ] End -->

            <!-- <div class="text-center text-muted">
                Chưa có tài khoản ?
                <a href="register.php">Đăng ký ngay</a>
            </div> -->

        </div>
    </div>
    <!-- [ content ] End -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var input = document.getElementById("pass");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("submit-btn").click();
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#submit-btn').on('click', function(){
                var email = $("#email").val();
                var pass = $("#pass").val();
                $.ajax({
                    url: "handlers/login/login.php",
                    method: "post",
                    data:{
                        submit: 'true',
                        email: email,
                        pass: pass,
                    },
                    success: function(data){
                        
                    }
                });
            });
        });
    </script>
</body>

</html>
