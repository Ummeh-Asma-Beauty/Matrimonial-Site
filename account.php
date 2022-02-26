<?php
	$Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Religion=$_POST['Religion'];
    $Age=$_POST['Age'];
    $Education=$_POST['Education'];
    $Qualification=$_POST['Qualification'];
    $Familymember=$_POST['Familymember'];
    $Presentaddress=$_POST['Presentaddress'];
    $Permanentaddress=$_POST['Permanentaddress'];
    $Password = $_POST['Password'];
    $Confirmpassword =$_POST['Confirmpassword'];
    $Image=$_POST['Image'];
    $conn = new mysqli('localhost','root','','accounts');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed: ". $conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into users
			(Username,Email,Religion,Age,Education,Qualification,Familymember,Presentaddress,Permanentaddress,Password,
			 Confirmpassword,Image) values(?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt-> bind_param("sssisssssssi",$Username,$Email,$Religion,$Age,$Education,$Qualification,$Familymember,
        	$Presentaddress,$Permanentaddress,$Password,$Confirmpassword,$Image);
		$execval = $stmt-> execute();
		echo "registration successfully";
		$stmt->close();
		$conn->close();
	}
?>
