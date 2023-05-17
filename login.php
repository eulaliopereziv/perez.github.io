<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.4.min.js"><</script>

</head>

<body style="background-image: url(back2.png);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height:95vh;">
<div class=" container bg-white p-5 shadow rounded-5 position-fixed" style="width:550px; height:450px; margin-left: 58%;
    margin-top: 10%; ">
    <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "dbhelper.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                die();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
    ?>
   
        <div class=" fw-bold text-primary mx-auto mb-4" style="font-size:25px; text-align:center;">
            SIGN IN </div>
        <form action="login.php" method="post">

            <div class="form-floating mt-2 mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email" >
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class=" mt-4 mb-4">
                <input type="submit" style="margin-left: 40%;" value="Sign In" name="login"
                class="btn btn-primary btn-lg " >
            </div>
            
        </form>
        <div  style="margin-left: 39%">
            <a href="registration.php" type="button" class="btn btn-success btn-lg">
             Register
            </a>
        </div>
    </div>



</body>

</html>