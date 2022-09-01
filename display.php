<?php 
echo "<link rel=stylesheet href=style.css>";

	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "data_form";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	  if(!$conn){
		  echo('Could not Connect MySql Server:' .mysql_error());
		}
		
		echo "<form class=signup-form>";
		echo "<div class=form-header>";
        echo "<h1>Profile</h1>";
		echo "<div class=form-body>";
      echo "</div>";
	  echo "</form>";
    
     $user_id = $_POST['user_id'];
	 $password=$_POST['password'];
     $sql = "select *from user_data where user_id='$user_id' and password='$password'";
    $result = $conn->query($sql);
     $row = $result->fetch_assoc();
	 echo "Name: " . $row["first_name"]." ". $row["last_name"]. "<br>".
	 "sex :". $row["sex"]. "<br>".
	 "Date of Birth :". $row["date_of_birth"]. "<br>".
	 "Contact No :". $row["phone_number"]. "<br>".
     mysqli_close($conn);


?>