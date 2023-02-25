<?php 
        $login = false;
        $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        // $sql = "select * from users where username = '$username' AND password = '$password'";
        // if the password was not change to hash the we will be using the above query.

        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if(password_verify($password, $row['password']))
                {

                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: home.php");
                }
                else
                {
                $showError = "Invalid Credentials";
                }

            }
        }
    else
    {
        $showError = "Your password or username doesn't match.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

            <h1>Login</h1>
            <div class="inputs">
                <span class="material-symbols-outlined">person</span>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                <!-- <input type="text" placeholder='Email' name="email" /> -->
            </div>
            <div class="inputs">
                <span class="material-symbols-outlined">password</span>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                <!-- <input type="password" placeholder='Password' name="password" /> -->
            </div>


            <button type="submit">Login</button>
            <span>Don't have an account?
                <a href="Register.php">Register</Link>
            </span>

            <!-- this directly skip to the inde page -->
            
            <a class="skip-link" href= home.php>Skip to content ?</a>
        </form>
    </div>
</body>

</html>