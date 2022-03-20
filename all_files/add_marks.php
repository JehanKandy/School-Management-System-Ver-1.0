<?php
    include("../config.php");
    if(isset($_POST['find'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
        
        
            $sql1 = "SELECT * FROM student WHERE s_id= '$id'";
            $result1 = mysqli_query($con, $sql1);   
            
            if(mysqli_num_rows($result1) > 0){
                while($row = mysqli_fetch_assoc($result1)){ 
                    $s_id = $row['s_id'];
                    $fn = $row['fname'];
                    $ln = $row['lname'];
                    $gender = $row['gender'];
                    $email = $row['email'];
                }          
            }
        }
    }elseif(isset($_POST['marks'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ss_id = $_POST['s_id'];
            $eng = $_POST['eng'];
            $it = $_POST['it'];
            $math = $_POST['maths'];
            $sci = $_POST['sci'];
            $his = $_POST['his'];

            //check existing marks for one student in the database
            $sql2 = "SELECT * FROM marks WHERE id = '$ss_id'";
            $result2 = mysqli_query($con, $sql2);
            
            $nor = mysqli_num_rows($result2);


            
            if($nor > 0){
                $error[] = "Student Marks already added";
            }elseif(empty($eng)){
                $error[] = "English Marks Shouldn't be empty";
            }
            elseif(empty($it)){
                $error[] = "English Marks Shouldn't be empty";
            }
            elseif(empty($math)){
                $error[] = "English Marks Shouldn't be empty";
            }
            elseif(empty($sci)){
                $error[] = "English Marks Shouldn't be empty";
            }
            elseif(empty($his)){
                $error[] = "English Marks Shouldn't be empty";                
            }
            else{
                //calculate marks total and average
                //total

                $total = $eng + $it + $math + $sci;

                //average = total/(count of subjects)
                //4 subjects are here.

                $avg = $total/4;
                        
                $sql4 = "INSERT INTO marks(m_id,English,IT,Maths,Science,History,total,average)VALUES('$ss_id','$eng','$it','$math','$sci','$his','$total','$avg')";
                $result4 = mysqli_query($con, $sql4);
                header("location:all_marks.php");
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
    <title>Add Marks</title>
    <link rel="stylesheet" href="../style1.css">
    <style>
        .add{
            background: rgba(29, 164, 29, 0.69);
            color: white;
            width: 10%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .add:hover{
            background: rgba(0, 125, 0, 1);
            color: white;
        }
    </style>
</head>
<body>

<a href="all_marks.php"><button class="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg> &nbsp All Marks</button></a>
    <a href="../admin/admin.php"><button class="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg> &nbsp DashBoard</button></a>
    <div class="container">
        <div class="content">
                <h1>
                    Add Student Marks
                </h1>
                <div class="form-container">
                    <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
                        <?php
                                if(isset($error1)){
                                    foreach($erro1r as $error){
                                        echo("<p class='error'>".$error1."</p>");
                                    }
                                }
                        ?>
                        <input type="number" name="id" placeholder="Enter Student ID">

                        <input type="submit" value="Find" name="find" class="login-submit">            
                    </form>
                



                
                <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
                        <?php
                                if(isset($error)){
                                    foreach($error as $error){
                                        echo("<p class='error'>".$error."</p>");
                                    }
                                }
                        ?>
                    Index Number :
                        <input type="number"  value="<?php echo $s_id; ?>" disabled>
                        <input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
                    First Name : 
                        <input type="text"  value="<?php echo $fn; ?>" disabled>
                    Last Name : 
                        <input type="text"  value="<?php echo $ln; ?>" disabled>
                    Gender : 
                        <input type="text"  value="<?php echo $gender; ?>" disabled>

                    Email : 
                        <input type="text"  value="<?php echo $email; ?>" disabled>

                        Add Marks: 
                        <input type="number" name="eng" placeholder="Enter English Marks">
                        <input type="number" name="it" placeholder="Enter IT Marks">
                        <input type="number" name="sci" placeholder="Enter Science Marks">
                        <input type="number" name="maths" placeholder="Enter Maths Marks">
                        <input type="number" name="his" placeholder="Enter History Marks">
                        
                                                
                    <input type="submit" value="ADD" name="marks" class="login-submit">
                </form>                   
            </div>
            <a href="all_marks.php"><button>All Marks</button></a>
            <a href="admin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
            </a>
        </div>
    </div>
</body>
</html>