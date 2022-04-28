<?php

include('userdetailsread.php');
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assests/styles.css">
   <script src="../assests/alert_message.js"></script>


</head>

<body>


    <div class="container" id="userdetails">
    <?php 
    
    
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status']);
    }

?>
        <div class="list-title">
            <h2>USER DETAILS DATA</h2>
        </div>
        <div>
             <a href="adduserdetails.php"><button class="btn btn-primary">+ Add Data</button></a>
        </div>
        <table class="table table-striped table-light">
            <thead class="table-dark">

                <tr>

                    <th>S.N</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Message</th>
                    <th>Action</th>


                </tr>
            </thead>
            <?php

            if (count($fetchData) > 0) {
                $sn = 1;
                // echo "<pre>";
                // print_r($fetchData);die;
                foreach ($fetchData as $data) {

            ?> <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $data['full_name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['phone']; ?></td>

                        <td><?php echo $data['message']; ?></td>
                        <td><a href="update-form.php?edit=<?php echo $data['id']; ?>"><i class="fa fa-edit"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a onClick='javascript:confirmationDelete($(this));return false;' href="delete-script.php?delete=<?php echo $data['id']; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr> <?php

                            $sn++;
                        }
                    } else {

                            ?>

                <tr>
                    <td colspan="7">No Data Found</td>
                </tr>

            <?php

                    }
            ?>

        </table>
    </div>

</body>

</html>