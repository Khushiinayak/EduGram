<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Edugram - Contact </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon.png" >
    </head>
    <body id="_4">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log"><br>
                <div id="ntro">Edugram</div>
                <!--<div id="E">E</div><div id="cir">E</div><div id="ntro">dugram</div>-->
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content" class="clearfix">
            
            <div id="box-1">
                <!--<div class="heading">
                    <center>
                    <h1 class="logo">
                        <div id="ntro">Edugram</div>
                        <div id="E">E</div><div id="cir">E</div><div id="ntro">dugram</div></h1>
                    <p id="tag-line">where questions are themselves the answers</p>
                    </center>
                </div>-->
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeN8GIArFXF8PcvOPyNLNTNR849NokjuvCQis59DAa0Inp_0A/viewform?usp=sf_link/viewform?embedded=true" width="640" height="812" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
            <div id="box-2">
                <div id="text">
                    <h1>Edugram</h1>
                    <p style="line-height: 20px;">
                        <a href="mailto:edugram@gmail.com">edugram@gmail.com</a><br>
                        Contact: +91 11111 11111<br>
                        Site By: <a href=#>Our Team</a><br>
                        <!--Social: <a href="https://github.com/Shivam010">Github@Shivam010</a><br>-->
                        <!--License: <a href=http://interrogate.herokuapp.com/LICENSE>MIT</a>-->
                    </p>
                </div>
            </div>
            
        </div>
    
        <!-- Footer -->
        <div id="footer">
            &copy; 2022 &bull; Edugram
        </div>
        
    </body>
    
</html>