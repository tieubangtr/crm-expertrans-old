<?php
function formatDate($datetime){
    $newDate = date("d/m/Y - H:i:s", strtotime(strval($datetime)));
    return $newDate;
}

function formatType($t){
    if($t == 'duhocngheduc'){
        return "Du học nghề Đức";
    }else if($t == 'cddieuduong'){
        return "CĐ Điều dưỡng";
    }else if($t == 'cdcokhi'){
        return "CĐ Cơ khí";
    }else if($t == 'cdnhahangkhachsan'){
        return "CĐ Nhà hàng - Khách sạn";
    }else if($t == 'chuyendoibang'){
        return "Chuyển đổi bằng";
    }else if($t == 'nganhlaitau'){
        return "Ngành lái tàu";
    }else if($t == 'nganhxaydung'){
        return "Ngành xây dựng";
    }else if($t == 'chuyendoibangthodien'){
        return "Chuyển đổi bằng thợ điện";
    }else if($t == 'chuyendoibangcntt'){
        return "Chuyển đổi bằng công nghệ thông tin";
    }else if($t == 'daotaotiengduc'){
        return "Đào tạo tiếng Đức";
    }else if($t == 'a1'){
        return "Tiếng Đức A1";
    }else if($t == 'b1'){
        return "Ôn thi B1";
    }else if($t == 'doitacnguon'){
        return "Đối tác nguồn";
    }else if($t == 'vpdd'){
        return "Văn phòng đại diện";
    }else if($t == 'congtyduhoc'){
        return "Công ty du học";
    }else if($t == 'ctv'){
        return "Cộng tác viên";
    }else if($t == 'xkld'){
        return "Xuất khẩu lao động";
    }else{
        return "Đối tác đầu ngoại";
    }
}

function formatSource($source){
    if($source == "website"){
        return "Website";
    }else if($source == "facebook"){
        return "Facebook";
    }else if($source == "google"){
        return "Google";
    }else if($source == "hotline"){
        return "Hotline";
    }else if($source == "doitac"){
        return "Đối tác";
    }else if($source == "nguoncanhan"){
        return "Nguồn cá nhân";
    }else if($source == "nguongioithieu"){
        return "Nguồn giới thiệu";
    }else if($source == "vpdd"){
        return "Nguồn VPDD";
    }else if($source == "dkt"){
        return "Đinh Khắc Tuấn";
    }else{
        return "EI Marketing";
    }
}

function formatStatus($status){
    if($status == 'moi'){
        return "Mới";
    }else if($status == 'tiemnang'){
        return "Tiềm năng";
    }else if($status == 'quantam'){
        return "Quan tâm";
    }else if($status == 'datlichhen'){
        return "Đặt lịch hẹn";
    }else if($status == 'hocthu'){
        return "Học thử";
    }else if($status == 'saisodienthoai'){
        return "Sai số điện thoại";
    }else if($status == 'chuanghemay'){
        return "Chưa nghe máy";
    }else if($status == 'saidoituong'){
        return "Sai đối tượng";
    }else if($status == 'khongconhucau'){
        return "Không có nhu cầu";
    }else if($status == 'sapchot'){
        return "Sắp chốt";
    }else if($status == 'kyhopdong'){
        return "Ký hợp đồng";
    }else if($status == 'dathutiendot1'){
        return "Đã thu tiền đợt 1";
    }else if($status == 'dathutiendot2'){
        return "Đã thu tiền đợt 2";
    }else{
        return "Đừng quên";
    }
}

function groupSelectStatus($status){
    $selection = array('moi', 'quantam', 'tiemnang', 'datlichhen', 'hocthu', 'nhaphoc', 'chuanghemay', 'saisodienthoai', 'saidoituong', 'khongconhucau', 'sapchot', 'kyhopdong', 'dathutiendot1', 'dathutiendot2', 'doiphanhoi', 'dungquen');
    $selection_value = array('Mới', 'Quan tâm', 'Tiềm năng', 'Đặt lịch hẹn', "Học thử", "Nhập học", "Chưa nghe máy", "Sai số điện thoại", "Sai đối tượng", "Không có nhu cầu", "Sắp chốt", "Ký hợp đồng", "Đã thu tiền đợt 1", 'Đã thu tiền đợt 2', 'Đợi phản hồi', "Đừng quên");
    $output = '';
    for($i = 0; $i < count($selection); $i++){
        if($status == $selection[$i]){
            $output .= "<option value='$selection[$i]' selected>$selection_value[$i]</option>";
        }else{
            $output .= "<option value='$selection[$i]'>$selection_value[$i]</option>";
        }
    }
    return $output;
}

function groupSelectType($type){
    $selection = array('duhocngheduc', 'cddieuduong', 'cdcokhi', 'cdnhahangkhachsan', 'chuyendoibang', 'nganhlaitau', 'nganhxaydung', 'chuyendoibangthodien', 'chuyendoibangcntt', 'daotaotiengduc', 'a1', 'b1', 'doitacnguon', 'vpdd', 'congtyduhoc', 'ctv', 'xkld', 'doitacdaungoai');
    $selection_value = array('Du học nghề Đức', "CĐ Điều dưỡng", "CĐ Cơ khí", "CĐ Nhà hàng - Khách sạn", "Chuyển đổi bằng", "Ngành lái tàu", "Ngành xây dựng", "Chuyển đổi bằng thợ điện", "Chuyển đổi bằng công nghệ thông tin", "Đào tạo tiếng Đức", "Tiếng Đức A1", "Ôn thi B1", "Đối tác nguồn", "Văn phòng đại diện", "Công ty du học", "Cộng tác viên", "Xuất khẩu lao động", "Đối tác đầu ngoại");
    $output = '';
    for($i = 0; $i < count($selection); $i++){
        if($type == $selection[$i]){
            $output .= "<option value='$selection[$i]' selected>$selection_value[$i]</option>";
        }else{
            $output .= "<option value='$selection[$i]'>$selection_value[$i]</option>";
        }
    }
    return $output;
}

function groupSelectSource($source){
    $selection = array('website', 'facebook', 'google', 'hotline', 'doitac', 'nguoncanhan', 'nguongioithieu', 'vpdd', 'dkt', 'eimarketing');
    $selection_value = array("Website", "Facebook", "Google", "Hotline", "Đối tác", "Nguồn cá nhân", "Nguồn giới thiệu", "Nguồn VPĐD", "Đinh Khắc Tuấn", "EI Marketing");
    $output = '';
    for($i = 0; $i < count($selection); $i++){
        if($source == $selection[$i]){
            $output .= "<option value='$selection[$i]' selected>$selection_value[$i]</option>";
        }else{
            $output .= "<option value='$selection[$i]'>$selection_value[$i]</option>";
        }
    }
    return $output;
}

function organizationContactCheck($data){
    if($data == '' || $data == '0'){
        return "none";
    }else{
        return "block";
    }
}

function getRandomPass($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

?>