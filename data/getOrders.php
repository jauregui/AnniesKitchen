<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "annies_web";

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
		$sql = "SELECT * FROM Order, Menu, Contact  WHERE Order.idC = Contact.idc AND Order.idM = Menu.idM";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)

			$response = array();
		    while($row = $result->fetch_assoc()) 
		    {
		    	array_push($response, array('firstName' => $row['firstName'],'telefone' => $row['telefone'], 'day' => $row['day'], 'dish' => $row['dish'], 'price' => $row['price'], 'idC' => $row['idC']));   
		    }
		    echo json_encode($response);
		}
		else
		{
	    	header('HTTP/1.1 406 No comments are available at the moment.');
	        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	} 

?>