<?php
    include ("config.php");
    session_start();

    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $fn = $_POST['fn'];
            $user = $_POST['user'];
            $pass = md5($_POST['pass1']);
            $cpass = md5($_POST['cpass']);
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $nic = $_POST['nic'];
            $dob = $_POST['dob'];
            $mobile = $_POST['mobile'];


            $new_user = mysqli_real_escape_string($con, $user);
            $new_email = mysqli_real_escape_string($con, $email);

            //check there ara any existing recode in database
            
            $sql1 = "SELECT * FROM user_tbl WHERE username = '$new_user' && email = '$new_email' && pass = '$pass' ";
            $result1 = mysqli_query($con,$sql1);

            $nor = mysqli_num_rows($result1);



            if($nor > 0){
                $error[] = "User Already exist";
            }else{
                //chech Password and Confirm password is matched.
                if($pass != $cpass){
                    $error[] = "Password and Confirm password doesn't match...!";
                }
                else{
                    //insert data to database

                        $sql2 = "INSERT INTO user_tbl(fname,username,pass,gender,email,nic1,dob,mobile1,user_status) VALUES('$fn','$new_user','$pass','$gender','$new_email','$nic','$dob','$mobile','1')";
                        $result2 = mysqli_query($con, $sql2);
                            
                        setcookie('loginDemo',$user,time()+60*60);
                        $_SESSION['login'] =  $user;
                        header("location:admin/admin.php");
                        
                  
            }
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
    <title>Registration</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="icon">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </svg>
        </a>
    </div>
    <div class="container">
        <div class="content">
            <div class="form-container">
                <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST">
                    <fieldset>
                        <legend>Registration</legend>

                        <?php
                                if(isset($error)){
                                    foreach($error as $error){
                                        echo("<p class='error'>".$error."</p>");
                                    }
                                }
                        ?>
                        <input type="text" name="fn" id="fn" placeholder="Enter First Name">
                        <input type="text" name="user" id="user" placeholder="Enter Your Username">
                        <input type="password" name="pass1" id="pass1" placeholder="Enter Your Password">
                        <input type="password" name="cpass" id="cpass" placeholder="Confirm Your Password">
                        <select name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="email" name="email" id="email" placeholder="Enter Your Email">
                        <input type="text" name="nic" id="nic" placeholder="Enter NIC Number">
                        Enter Date of Birth : 
                        <input type="date" name="dob" id="dob">
                        <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number">


                        <p>
                            Already have an accout? <a href="login.php">Login</a>
                        </p>
                        <input type="submit" value="Register" name="submit" class="submit">
                        <input type="reset" value="Clear" class="reset">
                    </fieldset>

                </form>
            </div>
        </div>
    </div>

    
</body>
</html>