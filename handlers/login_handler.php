<?php
	session_start();
    $output = "";
	if(isset($_POST['submit'])){
		include_once 'database_connection.php';
		$username = $_POST['email'];
		$pass = $_POST['pass'];
		$sql_check_user = "select count(id) as count from users where email = '".$username."';";
		$result_check_user = mysqli_query($connection, $sql_check_user);
		$row_check_user = mysqli_fetch_assoc($result_check_user);
		if(intval($row_check_user['count']) > 0){
			$sql = "select * from users where email = '$username'";
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_assoc($result);
			$user_id = $row['id'];
			if(password_verify($pass, $row['pass']) == true){
				$sql_update_login = "update users set last_login = NOW() where email = '$username'";
				if($result_update_login = mysqli_query($connection, $sql_update_login)){
					$_SESSION['username'] = $username;
					if($username == 'admin'){
						$output = "admin";
					}else{
						$output = $user_id;
					}
				}
			}else{
				$output = 'error';
			}
		}else{
			$output = 'error';
		}
	}
    echo $output;
 ?>