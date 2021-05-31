<?php
    include_once 'main_functions.php';
    include_once "database_connection.php";
    $output = '';
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 4);
        $sql = "select o.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name, u2.email as nguoiphutrach_email from organizations o, users u1, users u2 where o.nguoitao = u1.id and o.nguoiphutrach = u2.id and o.id='$id'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Tên tổ chức:</label>
                        <input type='text' class='form-control' id='edit-name' value='".$row['name']."'>
                    </div>
                    <div class='form-group'>
                        <label class='form-label'>Tình trạng</label>
                        <select class='custom-select' id='select-tinhtrang'>
                            ".groupSelectStatus($row['tinhtrang'])."
                        </select>
                        <div class='clearfix'></div>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Điện thoại:</label>
                        <input type='number' class='form-control' id='edit-phone' value='0".$row['dienthoai']."'>
                    </div>
                    <div id='edit-contact1' style='display:none;'>
                        <div class='form-group' >
                            <label for='recipient-name' class='col-form-label'>Họ tên liên hệ 1:</label>
                            <input type='text' class='form-control' id='edit-name1' value='".$row['lienhe_name1']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email liên hệ 1:</label>
                            <input type='text' class='form-control' id='edit-email1' value='".$row['lienhe_email1']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Điện thoại liên hệ 1:</label>
                            <input type='number' class='form-control' id='edit-phone1' value='0".$row['lienhe_phone1']."'>
                        </div>
                    </div>
                    <button type='button' class='btn btn-outline-info' id='show-contact1' style='display:block; margin: 10px 0;'>Chỉnh sửa liên hệ 1</button>
                    <button type='button' class='btn btn-outline-danger' id='hide-contact1' style='display:none;'>Ẩn liên hệ 1</button>
                    <div id='edit-contact2' style='display:none;'>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Họ tên liên hệ 2:</label>
                            <input type='text' class='form-control' id='edit-name2' value='".$row['lienhe_name2']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email liên hệ 2:</label>
                            <input type='text' class='form-control' id='edit-email2' value='".$row['lienhe_email2']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Điện thoại liên hệ 2:</label>
                            <input type='number' class='form-control' id='edit-phone2' value='0".$row['lienhe_phone2']."'>
                        </div>
                    </div>
                    <button type='button' class='btn btn-outline-info' id='show-contact2' style='display:block; margin: 10px 0;'>Chỉnh sửa liên hệ 2</button>
                    <button type='button' class='btn btn-outline-danger' id='hide-contact2' style='display:none;'>Ẩn liên hệ 2</button>
                    <div id='edit-contact3' style='display:none;'>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Họ tên liên hệ 3:</label>
                            <input type='text' class='form-control' id='edit-name3' value='".$row['lienhe_name3']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email liên hệ 3:</label>
                            <input type='text' class='form-control' id='edit-email3' value='".$row['lienhe_email3']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Điện thoại liên hệ 3:</label>
                            <input type='number' class='form-control' id='edit-phone3' value='0".$row['lienhe_phone3']."'>
                        </div>
                    </div>
                    <button type='button' class='btn btn-outline-info' id='show-contact3' style='display:block; margin: 10px 0;'>Chỉnh sửa liên hệ 3</button>
                    <button type='button' class='btn btn-outline-danger' id='hide-contact3' style='display:none;'>Ẩn liên hệ 3</button>
                    <div id='edit-contact4' style='display:none;'>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Họ tên liên hệ 4:</label>
                            <input type='text' class='form-control' id='edit-name4' value='".$row['lienhe_name4']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email liên hệ 4:</label>
                            <input type='text' class='form-control' id='edit-email4' value='".$row['lienhe_email4']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Điện thoại liên hệ 4:</label>
                            <input type='number' class='form-control' id='edit-phone4' value='0".$row['lienhe_phone4']."'>
                        </div>
                    </div>
                    <button type='button' class='btn btn-outline-info' id='show-contact4' style='display:block; margin: 10px 0;'>Chỉnh sửa liên hệ 4</button>
                    <button type='button' class='btn btn-outline-danger' id='hide-contact4' style='display:none;'>Ẩn liên hệ 4</button>
                    <div id='edit-contact5' style='display:none;'>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Họ tên liên hệ 5:</label>
                            <input type='text' class='form-control' id='edit-name5' value='".$row['lienhe_name5']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email liên hệ 5:</label>
                            <input type='text' class='form-control' id='edit-email5' value='".$row['lienhe_email5']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Điện thoại liên hệ 5:</label>
                            <input type='number' class='form-control' id='edit-phone5' value='0".$row['lienhe_phone5']."'>
                        </div>
                    </div>  
                    <button type='button' class='btn btn-outline-info' id='show-contact5' style='display:block; margin: 10px 0;'>Chỉnh sửa liên hệ 5</button>
                    <button type='button' class='btn btn-outline-danger' id='hide-contact5' style='display:none;'>Ẩn liên hệ 5</button>  
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Email:</label>
                        <input type='text' class='form-control' id='edit-email' value='".$row['email']."'>
                    </div>
                    <div class='form-group filter-component'>
                        <label class='form-label'>Người phụ trách</label>
                        <select ng-model='name' class='form-control input-lg' data-live-search='true' name='select-manager' id='select-manager' title='Chọn người phụ trách'>
                            <option value='".$row['nguoiphutrach']."' selected>".$row['nguoiphutrach_name'].' - '.$row['nguoiphutrach_email']."</option>
                        </select>
                        <div class='clearfix'></div>
                    </div>
                    <div class='form-group'>
                        <label for='message-text' class='col-form-label'>Mô tả:</label>
                        <textarea class='form-control' id='edit-note' style='height: 150px;'>".$row['mota']."</textarea>
                    </div>
                    <div class='form-group'>
                        <label class='form-label'>Nhóm khách hàng</label>
                        <select class='custom-select' id='select-nhomkhachhang'>
                            ".groupSelectType($row['nhomkhachhang'])."
                        </select>
                        <div class='clearfix'></div>
                    </div>
                    <div class='form-group'>
                        <label class='form-label'>Nguồn khách hàng</label>
                        <select class='custom-select' id='select-nguonkhachhang'>
                            ".groupSelectSource($row['nguonkhachhang'])."
                        </select>
                        <div class='clearfix'></div>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Địa chỉ:</label>
                        <input type='text' class='form-control' id='edit-address' value='".$row['diachi']."'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Người tạo: ".$row['nguoitao_name']."</label>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Ngày tạo: ".formatDate($row['timestamp'])."</label>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-primary editContact' id='edit-".$row['id']."'>Chỉnh sửa</button>            
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    </div>";
    }
    echo $output;
?>