<?php
	session_start();
	header('Content-type: application/json');
	$numeroSema = $_POST['numero'];
	$numDia= $_POST['diaa'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "annies";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	} else
	{
		$sql = "SELECT * FROM menu WHERE numeroSemana = $numeroSema";
		$result = $conn->query($sql);

				//echo $result->num_rows;
		if ($result->num_rows > 0)
		{

			for ($i=0; $i<$result->num_rows; $i++) {
		    $row=$result->fetch_assoc();
		    $response[$i]=array('Semana' =>$row['numeroSemana'],
		    				'dia' => $row ['diaSemana'],
		    				'nombre' =>$row['nombreComida'],
		     				'descripcion' =>$row['descripcionComida'],
		     				'precio' =>$row['precioComida'],
		     				'imagen' => $row['imagenComida']
		     );
		}
		   /* $_SESSION['user']=$response['usuario'];
		    $_SESSION['name']=$response['name'];
		    $_SESSION['last']=$response['last'];
		    $_SESSION['email']=$response['email']; */
		     echo json_encode($response[$numDia]);
		}
		else
		{
	    	header('HTTP/1.1 406 Incorrect User or Password');
	        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
		 $conn->close();

	}

	?>