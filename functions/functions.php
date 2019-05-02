<?php
	function countPersons($id,$category){
		require('database/db_connection.php');
		if(!empty($id)){


		}else{
			switch ($category) {
				case 'drivers':
				$query = mysqli_query($conn,"SELECT COUNT(iddriver) AS users FROM driver")  or die(mysqli_error($conn));
					break;

					case 'system':
				$query = mysqli_query($conn,"SELECT COUNT(iduser) AS users FROM users")  or die(mysqli_error($conn));
					break;

					case 'parents':
				$query = mysqli_query($conn,"SELECT COUNT(idparent) AS users FROM parent")  or die(mysqli_error($conn));
					break;
			}
		}
		if(mysqli_num_rows($query) > 0){
		$row = mysqli_fetch_array($query);
		return $row['users'];
	}else{
		return 0;
		}
	}
	function user_sessions($usertype,$name){
		session_start();
		switch ($usertype) {
			case 'super_admin':
				$_SESSION['user']=$name;
				break;

			case 'admin':
				$_SESSION['user']=$name;
				break;

			case 'attendant':
				$_SESSION['user']=$name;
				break;
		}
		return $_SESSION['user'];
	}
	function getActualStatus($status){
		switch ($status) {
			case 0:
				$status = 'Inactive';
				break;
			case 1:
				$status = 'Active';
				break;
			
			default:
				$status = 'Error';
				break;
		}
		return $status;

	}
	function renameImage($filename,$file_ext){
		$file = array();

          $file =explode('.',$filename);
          $new_file_name =$file[0].'-'.date('H-i-s').'.'.$file_ext;
          return $new_file_name;
	}
?>