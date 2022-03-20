<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&family=Lobster&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: url("images/sch2.jpg");
        }

        .nav_bar1 ul {
            list-style: none;
            overflow: hidden;
            background-color: #111;
            top: 0;
            width: 100%;
            font-size: 20px;
            font-family: 'Bebas Neue', cursive;
        }

        .nav_bar1 ul li {
            float: right;
        }

        .nav_bar1 ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .gallery {
            width: 100%;
            height: 20vh;
            background-image: url("../images/sch2.jpg");
            font-size: 300%;
            font-family: 'Contrail One', cursive;
            color: white;
        }


        .image_table {
            width: 60%;
            height: 50%;
            border-radius: 10%;
            align-self: center;
        }

        .nav_bar1 ul li a:hover:not(.active) {
            background-color: #222;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 35vh;
        }

        .td {
            width: 20%;
        }

        .title_f {
            font-size: 120%;
            font-family: 'Contrail One', cursive;
            color: white;
        }

        .sch_name {
            font-size: 110%;
            font-family: 'Squada One', cursive;

        }

        .ulinks {
            font-size: 110%;
            font-family: 'Squada One', cursive;

        }

        .downloads {
            font-size: 110%;
            font-family: 'Squada One', cursive;
        }

        .contact {
            font-size: 110%;
            font-family: 'Squada One', cursive;
        }

        .copy {
            background-color: #111;
            color: white;
        }
    </style>
</head>

<body>
    <div class="nav_bar1">
        <ul>
            <li><a href="login.php">System</a></li>
            <li><a href="http://learnjk.great-site.net/lms/" target="_blank">LMS</a></li>
            <li><a href="gallery.php">Our Gallery</a></li>
            <li><a href="../index.php">Home</a></li>
            <li style="float: left;"><a href="../index.php">School Management System</a></li>
        </ul>
    </div>
    <center>
        <div class="gallery">
            <br>
            Welcome to our Gallery
        </div>
        <br><br>
        <div>
            <table border="0">
                <tr>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <p class="title_img">
                            Workshop - Kandy - Arduino
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Education Trip - Anuradapura
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Class - Group works
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Sportmeet - 2022
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <p class="title_img">
                            Prize Givien - 2021
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            New Year Event
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Wesak Event
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Workshop - ET
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <p class="title_img">
                            Workshop - Kandy - Arduino
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Education Trip - Anuradapura
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Class - Group works
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Sportmeet - 2022
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                    <td align="center">
                        <img src="../images/sch1.jpg" alt="" class="image_table">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td align="center">
                        <p class="title_img">
                            Prize Givien - 2021
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            New Year Event
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Wesak Event
                        </p>
                    </td>
                    <td align="center">
                        <p class="title_img">
                            Workshop - ET
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div class="footer">
            <br><br>
            <table border="0">
                <tr>
                    <td class="td">
                        <p class="title_f">
                            ABC Schools
                        </p>
                    </td>
                    <td class="td">
                        <p class="title_f">
                            Useful Links
                        </p>
                    </td>
                    <td class="td">
                        <p class="title_f">
                            Downloads
                        </p>
                    </td>
                    <td class="td">
                        <p class="title_f">
                            Contact Us
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <p class="sch_name">
                            Learn Everything
                        </p>
                    </td>
                    <td>
                        <p class="ulinks">
                            1. <a href="#" target="_blank">One</a><br>
                            2. <a href="#" target="_blank">Two</a><br>
                            3. <a href="#" target="_blank">Three</a><br>
                        </p>
                    </td>
                    <td>
                        <p class="downloads">
                            Student marks <br>
                            Syllbus <br>
                            Assignments <br>
                        </p>
                    </td>
                    <td>
                        <p class="contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            123, Crosses Street,<br> Kandy. <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            +94 711758851 <br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                            jehankandy@gmail.com
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="copy">
            Copyright &copy; || Jehankandy - 2022
        </div>
    </center>

</body>

</html>