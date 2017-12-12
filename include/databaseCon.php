<?php
class database
{
	private $host="localhost";
	private $username="root";
	private $password="";
	private $database_name="roomreservation";

	public function PutData($qry)
	{
		$con = new mysqli($this->host,$this->username,$this->password,$this->database_name);
		if(!$con)
		{
			echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
		}
		if(mysqli_query($con,$qry))
		{
			mysqli_close($con);
			return true;
		}
		else
		{
			mysqli_close($con);
			return false;
		}
	}

	public function GetData($qry){
		$con = new mysqli($this->host,$this->username,$this->password,$this->database_name);
		if(!$con)
		{
			echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
		}
		if(mysqli_query($con,$qry))
		{
			$result = mysqli_query($con,$qry);
			mysqli_close($con);
			return $result;
		}
		else
		{
			mysqli_close($con);
			return false;
		}
	}
	public function LastId($qry)
	{
		$con = new mysqli($this->host,$this->username,$this->password,$this->database_name);
		if(!$con)
		{
			echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
		}
		if(mysqli_query($con,$qry))
		{
			
			$id =  mysqli_insert_id($con);
			mysqli_close($con);
			return $id;
		}
		else
		{
			mysqli_close($con);
			return false;
		}
		
	}
}