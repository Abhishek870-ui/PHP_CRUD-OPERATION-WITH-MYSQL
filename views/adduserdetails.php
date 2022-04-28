<?php

include('createuser.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Operation Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assests/styles.css">
    <script src="../assests/script.js"></script>
</head>

<body>
    <div class="container" id="userform">

        <p style="color:red"><?php if (!empty($msg)) {
                                    echo $msg;
                                } ?></p>

        <h1>PHP CRUD OPERATION</h1>

        <form id="form" method="POST" action="">
            <!-- First Name -->
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <!-- Mobile Number -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
            </div>

            <!-- Textarea for Comment/message -->
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" name="message" placeholder="Enter the message"></textarea>
            </div>

            <button type="submit" name="create" class="btn btn-primary">Submit</button>
            <a href="showusersdetails.php"><input class="btn btn-success" name="Show Data" value="Show data"></a>
        </form>

    </div>
</body>

</html>