
<?php

include("database.php");


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="spongebob.jpg" >
</head>
<body>
    <div id="mheader">
        <img style = "height:100px;width: 200px;" src = "images.png">
        <h1 style="color:black;">
            Welcome to SCOB000 database!!
        </h1>
        <hr>
    </div>

    <div class="fWrapper" id="fWrapper">
        <div id="firstWrapper" style = "display:none;">
            <p style="padding:0%; margin: 1%; font-size: 30px; text-align: center;">Register</p>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)"class="fas fa-user"></i>
                    <input class="input_field" type="text" minlength="3"
                     id="name" name = "name" placeholder="Enter Name" required>
                    <label>Name</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-user"></i>
                    <input class="input_field" type="text" 
                    minlength="3" id = "Surname" name = "surname" placeholder="Enter Surname" required>
                    <label>Surname</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-id-card"></i>
                    <input class="input_field" type="number"
                    minlength="3" id="Student_number" name = "student_number" placeholder="Enter Student Number" required>
                    <label>Student Number</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-book"></i>
                    <input class="input_field" type="text"
                    minlength="3" name="module_code" name = "module_code" placeholder="Module Code" required>
                    <label>Module Code</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-phone"></i>
                    <input class="input_field" type="number" name = "contact" id="contact" placeholder="Enter Contact" required>
                    <label>Contact Number</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-envelope"></i>
                    <input class="input_field" type="email" id="Email"  name = "email" placeholder="eg. 123@gmail.com" required>
                    <label>Email</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-lock"></i>
                    <input class="input_field" type="password" id="password" name = "password" placeholder="Enter Password" required>
                    <label>Password</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-lock"></i>
                    <input class="input_field" type="password" id="confirm_password" name = "confirm_password" placeholder="Re-enter Password" required>
                    <label>Re-Enter Password</label>
                </div>

                <input class="button" type="submit" value="Sign Up"><br>
                
                

            </form>

            <p style="color:black; margin-top:0%; font-size:28; margin-left: 10%;">
                Are you already a user? <a id ="signInButt" href = "#">sign In</a>
            </p>

            <div class="icons">
                
                <p style = "margin-top:0px;">
                   ____________OR_____________
                </p>
                <i class="fab fa-google"></i> Google
                <i class="fab fa-facebook"></i> Facebook
                <i class="fab fa-twitter"></i> Twitter
            </div>
        </div>

        <div id = "signInForm" class="signIn">
            <p style = "font-size: 28px; text-align: center;">Sign In</p>
            <form action = "<?php FILTER_SANITIZE_SPECIAL_CHARS( $_SERVER["PHP_SELF"])  ?>"method = "POST">

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-envelope"></i>
                    <input class="input_field" id = "signin_email" name = "signin_email"
                     type="email" placeholder="eg. 123@mail.com" required>
                    <label>Email</label>
                </div>

                <div class="input-group">
                    <i style = "color: rgb(34, 125, 148)" class="fas fa-lock"></i>
                    <input class="input_field" type="password" id = "signin_password" name = "signin_password" 
                    placeholder="Enter Password" required>
                    <label>Password</label>
                </div>

                <p style = "margin-left: 10%;">
                    Forgot sign in? <a href="#">Recover password</a>
                </p>

                <input style ="margin-top: 0; width: 80%;" id = "signInButt" class="button" type="submit" value="Sign In">
            </form>
            
            <p style = "margin-top: 0; margin-left: 25%;margin-bottom: 0px;;"class="recover">
                New user?
                <a id = "signUpButt" href="#">sign Up</a>

            </p>
            <div style = "margin-right:-20%;margin-left: -15%; margin-top:-2px;padding-bottom:20px;" class="icons">
            
                <i class="fab fa-google"></i> Google
                <i class="fab fa-facebook"></i> Facebook
                <i class="fab fa-twitter"></i> Twitter
            </div>
        </div>
    </div>
    <script src = "index.js"></script>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $Name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
        $contact = filter_input(INPUT_POST, "contact", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $confirm_password = filter_input(INPUT_POST, "confirm_password", FILTER_SANITIZE_SPECIAL_CHARS);
        $student_number = filter_input(INPUT_POST, "student_number", FILTER_SANITIZE_SPECIAL_CHARS);
        $module_code = filter_input(INPUT_POST, "module_code", FILTER_SANITIZE_SPECIAL_CHARS);
        $signin_email = filter_input(INPUT_POST, "signin_email", FILTER_SANITIZE_SPECIAL_CHARS);
        $signin_password = filter_input(INPUT_POST, "signin_password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if($password == $confirm_password){

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(student_num, name, surname,
                    contact_num, module_code, email, password)

                    VALUES ($student_number, '$Name', 
                             '$surnmame', $contact, '$module_code', 
                             '$email', '$hash')";

            mysqli_query($conn, $sql);
            echo"yoU are noW regisTARD!!";
            }

        }
        




mysqli_close($conn);

?>