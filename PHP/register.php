<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="register.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <?php
        if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["confirm_pass"];

        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        if(empty($firstname) OR empty($lastname) OR empty($email) OR empty($password) OR empty($cpassword)){
            array_push($errors,"All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Email is not valid");
        }
        if(strlen($password)<8){
            array_push($errors,"Password must be 8 characters long");
        }
        if($password !== $cpassword){
            array_push($errors,"Password does not match");
        }
        
        if(count($errors)>0){
            foreach($errors as $error){
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
        else{
            require_once "database.php";
            $sql = "INSERT INTO users (first_name,last_name,email,pass) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepare_stmt = mysqli_stmt_prepare($stmt,$sql);
            if($prepare_stmt){
                mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lastname,$email,$passwordhash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully</div>";
            }
            else{
                die("Something went wrong");
            }
        }
    }
        ?>
        <form action="register.php" method="post">
            <h2>Register</h2>

            <p>Please fill in this form to create an account.</p>

            <div class="input-field">
                <input type="text" name="firstname"  required>
                <label>Enter your First Name</label>
            </div>

            <div class="input-field">
                <input type="text" name="lastname"  required>
                <label>Enter your Last Name</label>
            </div>

            <div class="input-field">
                <input type="text" name="email"  required>
                <label>Enter your Email</label>
            </div>

            <div class="input-field">
                <input type="password" name="password"  required>
                <label>Enter password</label>
            </div>

            <div class="input-field">
                <input type="password" name="confirm_pass"  required>
                <label>Confirm password</label>
            </div>

            <button type="submit" href="login.html">Register</button>
        </form>
    </div>
</body>

</html>