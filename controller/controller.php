<?php 
	session_start();
	include 'include/databaseCon.php';
	$db = new database();
	include 'include/requestMethod.php';

	if(empty($_SESSION["user-role"]))
	{
		$_SESSION["user-role"]=0;
	}

	function GetValue($value,$table,$cnd1,$cnd2)
	{
		$db = new database();
		$st = "Select $value From $table where $cnd1 = '$cnd2'";
		$resule = $db->GetData($st);
		$result = "";
		if(mysqli_num_rows($resule)>0)
		{
			while ($val = mysqli_fetch_assoc($resule)) {
				$result = $val[$value];
			}
			return $result;
		}
		else
		{
			return 0;
		}

	} 
		
?>