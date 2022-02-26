<?php
   $Looking_For=$_POST['Looking_For'];
   $Religion=$_POST['Religion'];
   $Age=$_POST['Age'];
   $Limitation=$_POST['Limitation'];
   $Country=$_POST['Country'];
 
    $conn = new mysqli('localhost','root','','profiles');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed: ". $conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into searchprofile
			(Looking_For,Religion,Age,Limitation,Country) values(?,?,?,?,?)");
        $stmt-> bind_param("ssiis",$Looking_For,$Religion,$Age,$Limitation,$Country);
		$execval = $stmt-> execute();
		echo "registration successfully";
		$stmt->close();
		$conn->close();
	}
?>
