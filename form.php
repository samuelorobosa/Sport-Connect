
 <?php 

// get value of email on submit
  $email = $_POST['email'];

  $conn = new mysqli('localhost','id14349409_sportconnect','_F!ttN~zM#epx|&5','id14349409_thedatabase2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into theemails(`email`) values(?)");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
		echo "You have registered successfully";
		$stmt->close();
		$conn->close();
	}

?> 