<?php

    include 'authentication/dbConnection.php';

    $conn = connect();

/*    close_connect($conn);
*/

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];
        $address = $_POST['address'] ? $_POST['address'] : '';
        $contact_no = $_POST['contact_no'] ? $_POST['contact_no'] : '';


    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form : Inventory Management System</title>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <!-- MY CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <link rel="stylesheet" href="styles/register.css">

</head>

<body>
    <form method="POST" action="login.php" enctype="multipart/form-data">
        <section class="container">
            <div class="text_align">
                <h1>Registration Form</h1>

                <hr>
            </div>

            <div>
                <label for="">Name<span>*</span> : </label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            </div>

            <div>
                <label for="">Username<span>*</span> : </label>
                <input type="text" name="username" id="username" placeholder="Enter Your Username" required>
            </div>

            <div>
                <label for="">Email<span>*</span> : </label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
            </div>

            <div>
                <label for="">Password<span>*</span> : </label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>

            <div>
                <label for="">Repeat Password<span>*</span> : </label>
                <input type="password" name="repeat_password" id="repeat_password" placeholder="Confirm Password" required>
            </div>

            
            <div>
                <label for="">Address : </label>
                <input type="text" name="address" id="address" placeholder="Enter Your Address">
            </div>

            <div>
                <label for="">Contact No. : </label>
                <input type="tel" name="contact_no" id="contact_no" placeholder="Enter Your Contact Number">
            </div>

            <div class="text_align">
                <div>
                    <p> <span>***</span> By Creating An Account You Agree To Our Terms & Privacy</p>
                </div>

                <div>
                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                </div>

                <div>
                    <p>Already Have An Account <a href="login.php">Sign in</a></p>
                </div>
            </div>
        </section>
    </form>
</body>

</html>