<?php
 
 include('mydbCon.php');

if(isset($_POST['create'])){
   
      $msg=insert_data($connection);
      
}
    



// insert query
function insert_data($connection){
   
  $fname= legal_input($_POST['fname']);
  $lname = legal_input($_POST['lname']);
  $email= legal_input($_POST['email']);
  $phone = legal_input($_POST['phone']);
  $message = legal_input($_POST['message']);

  $query="INSERT INTO users (fname,lname,email,phone,message) VALUES ('$fname','$lname','$email','$phone','$message')";
  $exec= mysqli_query($connection,$query);
  if($exec){

    // $msg="Data was inserted sucessfully";  
    // return $msg;
    header('location:showusersdetails.php');
  
  }else{
    $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
  }
}

// convert illegal input to legal input
function legal_input($value) {
$value = trim($value);
$value = stripslashes($value);
$value = htmlspecialchars($value);
return $value;
}
 
?>