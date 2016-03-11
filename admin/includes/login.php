<?php

	function logIn($u_name, $password, $ip) {
		require_once('connect.php');
		$u_name = mysqli_real_escape_string($link, $u_name);
		$password = mysqli_real_escape_string($link, $password);		
		$logstring = "SELECT * FROM tbl_user WHERE user_name= '{$u_name}' AND user_pass= '{$password}'";
		$u_set = mysqli_query($link, $logstring);

		
		
		//echo $logstring;
		if (mysqli_num_rows($u_set)) {

			$user_found = mysqli_fetch_array($u_set, MYSQLI_ASSOC);			
			$id = $user_found['user_id'];
			$_SESSION['user_id']=$id;
			$_SESSION['user_name'] = $user_found['user_name'];						
			if (mysqli_query($link, $logstring)) {				
				$stringupdate = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";				
				$queryupdate = mysqli_query($link, $stringupdate);				
			}

			redirect_to("admin_index.php");
		} else {
			
			$mess_info = "Username or Password is incorrect please try again.";
			return $mess_info;
		}
		mysql_close($link);
	}
?>