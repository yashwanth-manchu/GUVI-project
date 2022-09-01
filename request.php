<?php
	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "data_form";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	  if(!$conn){
		  echo('Could not Connect MySql Server:' .mysql_error());
		}
	    
     $first_name = $_POST['first_name'];
	 $last_name=$_POST['last_name'];
	 if (isset($_POST['sex'])){
      
    $sex = $_POST['sex'];
     }
	 $date_of_birth=$_POST['date_of_birth'];
     $email_id = $_POST['email_id'];
     $phone_number = $_POST['phone_number'];
	 $user_id=$_POST['user_id'];
	 $password=$_POST['password'];
	 $confirm_password=$_POST['confirm_password'];
	 $user_id=$_POST['user_id'];
     $sql = $conn->prepare("INSERT INTO user_data (first_name,last_name,sex,date_of_birth,email_id,phone_number,user_id,password,confirm_password)
     VALUES(?,?,?,?,?,?,?,?,?)");
$sql->bind_param("sssssssss",$first_name,$last_name,$sex,$date_of_birth,$email_id,$phone_number,$user_id,$password,$confirm_password);
	 
$sql->execute();
echo "New records created successfully";

     mysqli_close($conn);


?>