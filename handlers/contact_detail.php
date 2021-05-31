<?php
    include_once 'main_functions.php';
    include_once "database_connection.php";
    $output = '';
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 4);
        $sql = "select c.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name, u2.email as nguoiphutrach_email from customer c, users u1, users u2 where c.nguoitao = u1.id and c.nguoiphutrach = u2.id and c.id='$id'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "
                    <div class='form-group'>
                        <label for='recipient-name' class='col-form-label'>Họ và tên:</label>
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