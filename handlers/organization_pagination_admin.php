<?php

    include_once 'main_functions.php';
    include_once 'database_connection.php';
    $page = '';
    $output = '';
    $record_per_page = 10;

    $sql_count_record = "select count(id) as count from organizations";
    $result_count_record = mysqli_query($connection, $sql_count_record);
    $row_count = mysqli_fetch_assoc($result_count_record);
    $count = intval($row_count['count']);
    $max_pages = ceil($count / $record_per_page);

    if(isset($_POST['page'])){
        $page = $_POST['page'];
        $request = $_POST['request'];
        $type = $_POST['type'];
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
    if($type == "none"){
        $sql = "select o.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name from organizations o, users u1, users u2 where o.nguoitao = u1.id and o.nguoiphutrach = u2.id order by id desc limit ".$start.", ".$record_per_page.";";
    }else{
        $sql = "select o.*, u1.name as nguoitao_name, u2.name as nguoiphutrach_name from organizations o, users u1, users u2 where o.nguoitao = u1.id and o.nguoiphutrach = u2.id and tinhtrang = '$type' order by id desc limit ".$start.", ".$record_per_page.";";
    }
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
                        <th scope='row' class='headcol1' style='background-color: white;'>".$index."</th>
                        <td class='headcol2'><b style='color:#1E9FF2; cursor:pointer;' class='viewData' id='cus-".$row['id']."'>".$row['name']."</b></td>
                        <td>".formatStatus($row['tinhtrang'])."</td>
                        <td>".$row['dienthoai']."</td>
                        <td>".$row['nguoiphutrach_name']."</td>
                        <td class='note-column'>".$row['mota']."</td>
                        <td>".$row['diachi']."</td>
                        <td>".$row['email']."</td>
                        <td>".formatType($row['nhomkhachhang'])."</td>
                        <td>".formatSource($row['nguonkhachhang'])."</td>
                        <td>".$row['nguoitao_name']."</td>
                        <td>".formatDate($row['timestamp'])."</td>
                        <td><button type='button' class='btn btn-sm btn-outline-danger removeContact' style='margin-left: 10px;' id='remove-".$row['id']."'>Xóa</button></td>
                    </tr>
                    ";
        $index++;
    }
    echo $output;
?>