<?php
    include("../config.php");

    //get all recodes from marks table
    $sql_all = "SELECT marks.m_id, marks.English, marks.IT, marks.Science, marks.Maths, marks.History, marks.average, marks.total, student.fname, student.lname FROM marks LEFT JOIN student ON student.s_id = marks.m_id ";
    $result = mysqli_query($con, $sql_all);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student</title>
    <style>
                table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th{
            font-size: 120%;
            font-family: 'Oswald', sans-serif;
        }
        tr{
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit{
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .edit:hover{
            background: rgba(0, 49, 255, 1);
            color: white;
        }
        h1{
            font-size: 350%;
            font-family: 'Poppins', sans-serif;
        }
        .acc_a{
            color: green;
        }
        .acc_d{
            color: red;
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
        .btn {
            background: #b0ebc4;
            color: rgb(25, 155, 75);
            text-transform: capitalize;
            font-size: 20px;
            cursor: pointer;
            border-radius: 2%;
            border: none;
            width: 15%;
        }

        .btn:hover {
            background: rgb(25, 155, 75);
            color: #fff;
        }
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
    </style>
</head>
<body>

<a href="add_marks.php"><button class="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg> &nbsp Add Marks</button></a>
    <a href="../admin/admin.php"><button class="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg> &nbsp DashBoard</button></a>


<br>

<center>

<h1>
    All Student
</h1>


<br><br><br><br>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                English
            </th>
            <th>
                IT
            </th>
            <th>
                Maths
            </th>
            <th>
                Science
            </th>
            <th>
                Total
            </th>
            <th>
                Average
            </th>

        </tr>
            <?php

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){

            ?>
        <tr>
            <td>
                <?php echo($row['m_id']); ?>
            </td>
            <td>
                <?php echo($row['fname']); ?>
            </td>
            <td>
                <?php echo($row['lname']); ?>
            </td>
            <td>
                <?php echo($row['English']); ?>
            </td>
            <td>
                <?php echo($row['IT']); ?>
            </td>
            <td>
                <?php echo($row['Maths']); ?>
            </td>
            <td>
                <?php echo($row['Science']); ?>
            </td>
            <td>
                <?php echo($row['total']); ?>
            </td>
            <td>
                <?php echo($row['average']); ?>
            </td>
            <?php
                    }
                }
            ?>
           
    </table>    
    </center>


</body>
</html>