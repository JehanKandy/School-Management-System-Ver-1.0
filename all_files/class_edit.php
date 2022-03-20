<?php
    include("../config.php");

    if(isset($_POST['id'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['id'];
            $grade = $_POST['grade'];
            $c_name = $_POST['c_name'];

            $sql_update = "UPDATE class SET grade = '$grade', c_name = '$c_name' WHERE id = '$id'";
            $result_update = mysqli_query($con, $sql_update);
            header("location:all_class.php");
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql_all = "SELECT * FROM class WHERE id = '$id'";
        $result_all = mysqli_query($con, $sql_all);

        $nor = mysqli_num_rows($result_all);

        if($nor > 0){
            while($row = mysqli_fetch_assoc($result_all)){
                $id = $row['id'];
                $grade = $row['grade'];
                $c_name = $row['c_name'];
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
    <title>Edit Class</title>
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
                        Class ID 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <?php echo $id; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Grade 
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="number" name="grade" value="<?php echo $grade; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Class Name
                    </td>
                    <td>
                        &nbsp&nbsp : &nbsp&nbsp
                    </td>
                    <td>
                        <input type="text" name="c_name" value="<?php echo $c_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update" name="update" class="update"> 
                    </td>
                </tr>
            </table>
            </form>

            <a href="all_class.php"><button class="back">Back</button></a> Without Updating
    
    
        
    </div>
</body>
</html>