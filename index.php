<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&family=Lobster&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <title>Schoool</title>
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

        .nav_bar1 ul li a:hover:not(.active) {
            background-color: #222;
        }

        .thumbnail {
            padding-top: 7%;
        }

        .thumbnail li {
            list-style: none;
            position: relative;
            margin-top: 50px;
        }

        .thumbnail img {
            display: block;
            max-width: 120px;
            transition: 0.5s;
        }

        .thumbnail img:hover {
            transform: translateX(50px);
            transition: 0.5s;
        }

        .big-img img {
            position: absolute;
            left: 20%;
            top: 40%;
            max-width: 500px;
            max-height: 300px;
        }

        .content {
            position: absolute;
            cursor: pointer;
            max-width: 50%;
            right: 3%;
            top: 20%;
        }

        .content p {
            color: white;
            font-size: 50px;
            font-weight: 700;
            text-shadow: 2px 0px 5px rgba(0, 0, 0, 0.5);
            font-family: 'Lobster', cursive;
            margin-left: 16%;
        }

        .content h1 {
            font-size: 80px;
            font-weight: 600;
            font-family: 'Anton', sans-serif;
            color: rgb(28, 211, 211);
            text-shadow: 5px 5px 2px rgba(0, 0, 0, 0.5);
        }

        .content h5 {
            font-size: 22px;
            font-weight: bold;
            color: white;
            font-family: sans-serif;
            text-shadow: 1px 1px 1px black;
            text-transform: uppercase;
            margin-left: 10%;
        }

        .style {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-image: url("images/sch1.jpg");
            clip-path: circle(450px at left 440px);
        }

        .style1 {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-color: white;
            clip-path: circle(460px at left 440px);
        }

        .gallery {
            font-size: 50px;
            text-transform: uppercase;
            font-family: 'Titan One', cursive;
            text-align: center;

        }

        .image_table {
            width: 60%;
            height: 50%;
            border-radius: 10%;
            align-self: center;
        }

        .gallery_full button {
            background-color: rgba(0, 85, 246, 0.54);
            border: none;
            border-radius: 50%;
            padding: 20px 45px;
            font-family: 'Black Han Sans', sans-serif;
            font-size: larger;

        }

        .gallery_full button:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: matrix3d(5px);
            transition: 0.5s;

        }

        .hr {
            width: 50%;
            border-radius: 50%;

        }

        .hr_down {
            width: 75%;
            border-radius: 50%;

        }

        .title_img {
            font-size: 15px;
            font-family: 'Creepster', cursive;
        }

        .system p {
            font-size: 40px;
            text-align: center;
            font-family: 'Fugaz One', cursive;
        }

        .system button {
            background-color: rgba(0, 85, 246, 0.54);
            border: none;
            border-radius: 10%;
            padding: 20px 45px;
            font-family: 'Black Han Sans', sans-serif;
            font-size: larger;

        }

        .system button:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: matrix3d(5px);
            transition: 0.5s;


        }

        .student_m p {
            font-size: 220%;
            font-family: 'Teko', sans-serif;
        }

        .student_m button {
            background-color: rgba(0, 168, 56, 0.69);
            border: none;
            border-radius: 10%;
            padding: 20px 45px;
            font-family: 'Black Han Sans', sans-serif;
            font-size: larger;

        }

        .student_m button:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: matrix3d(5px);
            transition: 0.5s;
        }

        .contact p {
            font-size: 40px;
            font-family: 'Contrail One', cursive;
        }

        .quote {
            font-size: 20px;
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

    <div class="container">
        <div class="nav_bar1">
            <ul>
                <li><a href="docs/login_f.php">System</a></li>
                <li><a href="http://learnjk.great-site.net/lms/" target="_blank">LMS</a></li>
                <li><a href="docs/gallery.php">Our Gallery</a></li>
                <li><a href="#">Home</a></li>
                <li style="float: left;"><a href="#">School Management System</a></li>
            </ul>
        </div>
        <div class="style1"></div>
        <div class="style"></div>

        <div class="thumbnail">
            <li><img src="images/newpencil.png" alt="" onclick="big('images/q4.png')"></li>
            <li><img src="images/newbk.png" alt="" onclick="big('images/q3.png')"></li>
            <li><img src="images/newereser.png" alt="" onclick="big('images/q1.png')"></li>
        </div>
        <div class="big-img">
            <img src="images/newbk.png" class="big" alt="" width="25%" height="30%">
        </div>
        <div class="content">
            <p> &#128525;Let's Learn&#128523;</p>
            <h1>Learning never exhausts the mind</h1>
            <h5>&#128526;The secret of your success is determined by your daily agenda <br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>&nbsp;&nbsp;
            </h5>
        </div>
    </div>
    <br><br><br>
    <center>
        <hr class="hr">
        <br>
        This web site is under development
        <br><br>
        <hr class="hr">
    </center>
    <br>

    <div class="gallery_full">
        <table border="0">
            <tr>
                <td colspan="4" style="height: 15%;">
                    <h2 class="gallery">
                        our gallery
                    </h2>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
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
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
                </td>
                <td align="center">
                    <img src="images/sch1.jpg" alt="" class="image_table">
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
        </table>
        <br><br>
        <center>
            <a href="docs/gallery.php"><button>More Photos</button></a>
        </center>
    </div>

    <br><br>
    <center>
        <hr class="hr_down">
        <br><br>
        <div class="student_m">
            <p>
                Find Your Student's Term Test Marks
            </p>
            <br>
            <a href="#" target="_blank"><button>Marks</button></a>
        </div>
        <br><br>
        <hr class="hr_down">
    </center>
    <br><br>

    <br>
    <div class="system">
        <p>
            Login to the system
        </p>
        <center>
            <div>
                <br>
                <a href="login.php" target="_blank"><button>Login</button></a>
            </div>
        </center>
    </div>
    <br><br>
    <center>
        <hr class="hr_down">

        <br><br>

        <div class="contact">
            <p>
                Stay With Us on <br><br>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>&nbsp;&nbsp;
            </p>
            <br>
            <hr class="hr_down">
            <br>
        </div>
        <div class="quote">
            <p>
                &#128512;"Run after your dreams like a lion runs after a deer."&#128525;
            </p>
        </div>
        <br>



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
<script>
    function big(img) {
        document.querySelector('.big').src = img;
    }
</script>



</html>