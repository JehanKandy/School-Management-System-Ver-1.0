<?php
    include("../config.php");
    if(isset($_POST['update'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['id'];
            $email_new= $_POST['email'];
            $nic_new = $_POST['nic'];
            $mobile_new = $_POST['mobile'];
            $user_status_new = $_POST['user_status'];


            $sql = "UPDATE student SET email = '$email_new', nic1 = '$nic_new', mobile1 = '$mobile_new',user_status = '$user_status_new' WHERE s_id = '$id'";
            $result_update = mysqli_query($con, $sql);

            if(!$result_update){
                $error[] = "ERROR ";
            }else{
                header("location:all_student.php");
            }
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql_all = "SELECT * FROM student WHERE s_id = '$id'";
        $result1 = mysqli_query($con, $sql_all);

        $nor = mysqli_num_rows($result1);
        if($nor > 0){
            while($row = mysqli_fetch_assoc($result1)){
                $fn = $row['fname'];
                $ln = $row['lname'];
                $email = $row['email'];
                $gender = $row['gender'];
                $nic = $row['nic1'];
                $mobile = $row['mobile1'];
                $dob = $row['dob'];
                $user_status = $row['user_status'];
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
    <title>Edit Student</title>
    <style>
        form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            background: #fff;
            width: 75%;
            font-family: 'Poppins', sans-serif;
            
        }
        .update{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .update:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        .back{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 10%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .back:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        p{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;  
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
            <table border="0">
                <tr>
                    <td>
                        First Name : 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <?php echo $fn; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name :
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <?php echo $ln; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <?php echo $gender; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        NIC Number 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="text" name="nic" value="<?php echo $nic; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile Number
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="text" name="mobile" value="<?php echo $mobile; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <?php echo $dob; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        User Status 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="text" name="user_status" value="<?php echo $user_status; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update" name="update" class="update">
                    </td>
                </tr>
            </table> 
            </form>  
            <a href="all_student.php"><button class="back">back</button></a>Without Updating

    </div>
    
</body>
</html>