<?php 
        $showAlert = false;
        $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $exists = false;

    // for chencking wheathe the username already eixist.
    $existSql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0)
    {
        // $exists = true; (temp.)

        $showError = "Username already exist.";
    }
    else
    {
            // $exists = false; (temp.)

        if(($password == $confirm_password))
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $showAlert = true;
                header("location: login.php");
            }
        }
        else
        {
            $showError = "Your password should match to each other.";
        }
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/style1.css">
     <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
   <?php 
   if($showError)
   {
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong>'.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
   
   ?>
    <div class="container">
        <form action="" method="post">

            <h1>Register</h1>
            <div class="inputs">
                <span class="material-symbols-outlined">person</span>
                <input type="text" maxlength = "11" class="form-control" name="username" id="inputEmail4" placeholder="Username">
                <!-- <input type="text" placeholder='Email' name="username" /> -->
            </div>


            <div class="inputs">
                <span class="material-symbols-outlined">password</span>
                <input type="password" maxlength = "15" class="form-control" name ="password" id="inputPassword4" placeholder="Password">

                <!-- <input type="password" placeholder='Password' name="password" /> -->
            </div>
            <div class="inputs">
                <span class="material-symbols-outlined">password</span>
                <input type="password" maxlength = "15" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">

                <!-- <input type="password" placeholder='Confirm password' name="confirmPassword" /> -->
            </div>


            <button type="submit">Register</button>
            <span>Already have an account?
                <a href="login.php">Login</Link>
            </span>
        </form>
    </div>
</body>

</html>