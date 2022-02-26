<?php
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Passwords = $_POST['Passwords'];

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed: ". $conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into signup(Email,Username,Passwords) values(?,?,?)");
		$stmt-> bind_param("sss",$Email,$Username,$Passwords);
		$execval = $stmt-> execute();
		echo "registration successfully";
		header('Location:link.html');
		
		$stmt->close();
		$conn->close();
	}