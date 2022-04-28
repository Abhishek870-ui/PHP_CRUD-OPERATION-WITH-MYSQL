<?php

include('mydbCon.php');



if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT id,fname,lname,email,phone,message FROM users WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $fname= legal_input($_POST['fname']);
    $lname= legal_input($_POST['lname']);
      $email= legal_input($_POST['email']);
      $phone = legal_input($_POST['phone']);
      $message = legal_input($_POST['message']);

      $query="UPDATE users 
            SET fname='$fname',
            lname='$lname',
                email='$email',
                phone= '$phone',
                message='$message' ,
                update_at = CURRENT_TIMESTAMP WHERE id=$id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:showusersdetails.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
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