<?php

    include_once 'main_functions.php';
    include_once 'database_connection.php';
    $page = '';
    $output = '';
    $record_per_page = 10;

    $sql_count_record = "select count(id) as count from users";
    $result_count_record = mysqli_query($connection, $sql_count_record);
    $row_count = mysqli_fetch_assoc($result_count_record);
    $count = intval($row_count['count']);
    $max_pages = ceil($count / $record_per_page);

    if(isset($_POST['page'])){
        $page = $_POST['page'];
        $request = $_POST['request'];
        $search = $_POST['search'];
        if(intval($page) == 1 && $request == 'prev'){
            $page = 1;
        }else if(intval($page) > $max_pages && $request == 'next'){
            $page = $max_pages;
        }else{
            if($request == 'next'){
                $page = intval($page) + 1;
            }else{
                $page = intval($page) - 1;
            }
        }
    }else{
        $page = 1;
    }

    $start = ($page - 1) * $record_per_page;
    $index = $start + 1;
    if($search == "none"){
        $sql = "select u1.*, u2.name as manager from users u1, users u2 where u1.in_charge_of = u2.id order by id desc limit ".$start.", ".$record_per_page.";";
    }else{
        $sql = "select u1.*, u2.name as manager from users u1, users u2 where u1.in_charge_of = u2.id and name like '%".$search."%' order by id desc limit ".$start.", ".$record_per_page.";";
    }
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
                        <th scope='row'>".$index."</th>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['manager']."</td>
                        <td>".formatDate($row['last_login'])."</td>
                        <td><button type='button' class='btn btn-sm btn-outline-primary editData' id='edit-".$row['id']."'>Sửa</button>
                            <button type='button' class='btn btn-sm btn-outline-warning resetPass' style='margin-left: 10px;' id='reset-".$row['id']."'>Reset mật khẩu</button>
                            <button type='button' class='btn btn-sm btn-outline-danger removeData' style='margin-left: 10px;' id='remove-".$row['id']."'>Xóa</button></td>
                    </tr>
                    ";
        $index++;
    }
    echo $output;
?>