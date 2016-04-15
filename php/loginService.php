<?php
	session_start();
	header('Content-type: application/json');
	$pass = $_POST['userPassword'];


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "annies";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
	else
	{
		$sql = "SELECT password FROM users WHERE password = '$pass'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{ 

		    $row=$result->fetch_assoc();
		    $response=array('pswd' =>$row['password'],
		     );

		    $_SESSION['passw']=$response['pswd'];
		     echo json_encode($response);
		     //return $response;
		}
		else
		{
	    	header('HTTP/1.1 406 Incorrect Password');
	        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
		 $conn->close();
	} 

?>
