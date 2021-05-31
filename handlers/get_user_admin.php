<?php
    include_once 'database_connection.php';
    $output = '';
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 5);

        $sql = "select u1.*, u2.name as manager from users u1, users u2 where u1.in_charge_of = u2.id and u1.id = '$id'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Họ và tên:</label>
                            <input type='text' class='form-control' id='name' value='".$row['name']."'>
                        </div>
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Số điện thoại:</label>
                            <input type='number' class='form-control' id='phone' value='".$row['phone']."'>
                        </div>          
                        <div class='form-group'>
                            <label for='recipient-name' class='col-form-label'>Email:</label>
                            <input type='text' class='form-control' id='email' value='".$row['email']."' disabled>
                        </div>
                        <div class='form-group filter-component'>
                            <label class='form-label'>Người quản lý</label>
                            <select ng-model='name' class='form-control input-lg' data-live-search='true' name='select-manager' id='select-manager' title='Chọn người quản lý'>
                            </select>
                            <div class='clearfix'></div>
                        </div>
                        <small class='invalid-feedback' style='display:none;' id='error-display'></small>                            
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            <button type='button' class='btn btn-primary editSbmit ' id='sbmit-id-".$id."'>Chỉnh sửa</button>
                        </div>";

    }
    echo $output;
?>