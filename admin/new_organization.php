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
                            <div>Qu???n l?? kh??ch h??ng</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="index.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-globe"></i>
                            <div>Qu???n l?? t??? ch???c</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="users.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>Qu???n l?? ng?????i d??ng</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="../logout.php" class="sidenav-link">
                            <i class="sidenav-icon feather icon-lock"></i>
                            <div>????ng xu???t</div>
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
                                <input type="text" class="form-control navbar-text mx-2" placeholder="T??m ki???m...">
                            </span>
                        </label>
                    </div>

                    <div class="navbar-nav align-items-lg-center ml-auto">
                        <!-- Divider -->
                        <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                        <div class="demo-navbar-user nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Qu???n tr??? vi??n</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="../logout.php" class="dropdown-item">
                                    <i class="feather icon-power text-danger"></i> &nbsp; ????ng xu???t</a>
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
                        <h4 class="font-weight-bold py-3 mb-0">Th??m t??? ch???c m???i</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php?id=<?php echo $id ?>"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="organizations.php">Qu???n l?? t??? ch???c</a></li>
                                <li class="breadcrumb-item"><a href="new_organization.php">Th??m m???i t??? ch???c</a></li>
                            </ol>
                        </div>
                        <div class="card mb-4">
                            <h6 class="card-header">Th??m t??? ch???c m???i</h6>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">H??? v?? t??n t??? ch???c</label>
                                            <input type="text" class="form-control" required id="name">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6" style="display:none;">
                                            <label class="form-label">ID</label>
                                            <input type="text" class="form-control" id="uid" value="<?php echo $id; ?>">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">S??? ??i???n tho???i t??? ch???c</label>
                                            <input type="number" class="form-control" required id="phone">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">?????a ch??? t??? ch???c</label>
                                            <input type="text" class="form-control" id="address">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Email t??? ch???c</label>
                                            <input type="email" class="form-control" id="email">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-1">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">H??? v?? t??n li??n h??? 1</label>
                                                <input type="text" class="form-control" required id="contact1-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">S??? ??i???n tho???i li??n h??? 1</label>
                                                <input type="number" class="form-control" required id="contact1-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email li??n h??? 1</label>
                                                <input type="email" class="form-control" id="contact1-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-1" style="margin-left: 40%; margin-top: 3%;">???n ng?????i li??n h???</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-2">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">H??? v?? t??n li??n h??? 2</label>
                                                <input type="text" class="form-control" required id="contact2-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">S??? ??i???n tho???i li??n h??? 2</label>
                                                <input type="number" class="form-control" required id="contact2-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email li??n h??? 2</label>
                                                <input type="email" class="form-control" id="contact2-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-2" style="margin-left: 40%; margin-top: 3%;">???n ng?????i li??n h???</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-3">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">H??? v?? t??n li??n h??? 3</label>
                                                <input type="text" class="form-control" required id="contact3-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">S??? ??i???n tho???i li??n h??? 3</label>
                                                <input type="number" class="form-control" required id="contact3-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email li??n h??? 3</label>
                                                <input type="email" class="form-control" id="contact3-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-3" style="margin-left: 40%; margin-top: 3%;">???n ng?????i li??n h???</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-4">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">H??? v?? t??n li??n h??? 4</label>
                                                <input type="text" class="form-control" required id="contact4-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">S??? ??i???n tho???i li??n h??? 4</label>
                                                <input type="number" class="form-control" required id="contact4-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email li??n h??? 4</label>
                                                <input type="email" class="form-control" id="contact4-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-4" style="margin-left: 40%; margin-top: 3%;">???n ng?????i li??n h???</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-style:double; padding: 5px; margin: 10px 0; display:none;" id="contact-5">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">H??? v?? t??n li??n h??? 5</label>
                                                <input type="text" class="form-control" required id="contact5-name">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">S??? ??i???n tho???i li??n h??? 5</label>
                                                <input type="number" class="form-control" required id="contact5-phone">
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email li??n h??? 5</label>
                                                <input type="email" class="form-control" id="contact5-email">
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="button" class="btn btn-outline-danger" id="remove-contact-5" style="margin-left: 40%; margin-top: 3%;">???n ng?????i li??n h???</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-info" id="add_contact">Th??m ng?????i li??n h???</button>
                                    <div class="form-row" style="margin: 40px 0;">
                                        <label class="col-form-label col-sm-2">M?? t???</label>
                                        <div class="col-sm-10" style="border-style:groove;">
                                            <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 200px; " id="note"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="form-label">T??nh tr???ng</label>
                                            <select class="custom-select" id="select-tinhtrang">
                                                <option value="moi" selected>M???i</option>
                                                <option value="quantam">Quan t??m</option>
                                                <option value="tiemnang">Ti???m n??ng</option>
                                                <option value="datlichhen">?????t l???ch h???n</option>
                                                <option value="hocthu">H???c th???</option>
                                                <option value="nhaphoc">Nh???p h???c</option>
                                                <option value="chuanghemay">Ch??a nghe m??y</option>
                                                <option value="saisodienthoai">Sai s??? ??i???n tho???i</option>
                                                <option value="saidoituong">Sai ?????i t?????ng</option>
                                                <option value="khongconhucau">Kh??ng c?? nhu c???u</option>
                                                <option value="sapchot">S???p ch???t</option>
                                                <option value="kyhopdong">K?? h???p ?????ng</option>
                                                <option value="dathutiendot1">???? thu ti???n ?????t 1</option>
                                                <option value="dathutiendot2">???? thu ti???n ?????t 2</option>
                                                <option value="doiphanhoi">?????i ph???n h???i</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Nh??m kh??ch h??ng</label>
                                            <select class="custom-select" id="select-nhomkhachhang">
                                                <option value="duhocngheduc">Du h???c ngh??? ?????c</option>
                                                <option value="cddieuduong">C?? ??i???u d?????ng</option>
                                                <option value="cdcokhi">C?? C?? kh??</option>
                                                <option value="cdnhahangkhachsan">C?? Nh?? h??ng - Kh??ch s???n</option>
                                                <option value="chuyendoibang">Chuy???n ?????i b???ng</option>
                                                <option value="nganhlaitau">Ng??nh l??i t??u</option>
                                                <option value="nganhxaydung">Ng??nh x??y d???ng</option>
                                                <option value="chuyendoibangthodien">Chuy???n ?????i b???ng th??? ??i???n</option>
                                                <option value="chuyendoibangcntt">Chuy???n ?????i b???ng c??ng ngh??? th??ng tin</option>
                                                <option value="daotaotiengduc">????o t???o ti???ng ?????c</option>
                                                <option value="a1">Ti???ng ?????c A1</option>
                                                <option value="b1">??n thi B1</option>
                                                <option value="doitacnguon">?????i t??c ngu???n</option>
                                                <option value="vpdd">V??n ph??ng ?????i di???n</option>
                                                <option value="congtyduhoc">C??ng ty du h???c</option>
                                                <option value="ctv">C???ng t??c vi??n</option>
                                                <option value="xkld">Xu???t kh???u lao ?????ng</option>
                                                <option value="doitacdaungoai">?????i t??c ?????u ngo???i</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label">Ngu???n kh??ch h??ng</label>
                                            <select class="custom-select" id="select-nguonkhachhang">
                                                <option value="website">Website</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="google">Google</option>
                                                <option value="hotline">Hotline</option>
                                                <option value="doitac">?????i t??c</option>
                                                <option value="nguoncanhan">Ngu???n c?? nh??n</option>
                                                <option value="nguongioithieu">Ngu???n gi???i thi???u</option>
                                                <option value="vpdd">Ngu???n VPDD</option>
                                                <option value="dkt">??inh Kh???c Tu???n</option>
                                                <option value="eimarketing">EI Marketing</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group filter-component">
                                                <label class="form-label">Ng?????i ph??? tr??ch</label>
                                                <select ng-model="name" class="form-control input-lg" data-live-search="true" name="select-manager" id="select-manager" title="Ch???n ng?????i ph??? tr??ch">

                                                </select>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-lg btn-outline-success" style="float:right; margin: 10px 40px;" id="submit-btn">X??c nh???n</button>
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
                            alert("Th??m t??? ch???c m???i th??nh c??ng!");
                            document.location.href = 'organizations.php';
                        }else if(data == 'empty'){
                            console.log("empty");
                            alert("D??? li???u kh??ng ???????c ????? tr???ng!");
                            $("#name").addClass("is-invalid");
                            $("#phone").addClass("is-invalid");
                        }else{
                            console.log("error");
                            alert("???? c?? l???i x???y ra, xin vui l??ng th??? l???i!");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
