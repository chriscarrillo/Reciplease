<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/png" href="images/favicon.png" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/medium.css" media="only screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="styles/small.css" media="only screen and (max-width: 750px)" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/PopupWindow.js"></script>
    <style>
        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0} 
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }   
    </style>
</head>  
    <body id="homePage">
    <?php include "templates/functions.php" ?>
        <div id="home">
            <?php
            session_start();
            include "templates/logo.php";      

            ?>
            
        </div>
        <form action="" method="get" id="searchForm" class="form">
                <input type="textSearch" id="search" name="search" placeholder="search" /><br />
        </form>
        <div id="title">
            <h1 id="title1">your recipes...</h1>
            <h1 id="title2">prepared fresh daily</h1>
        </div>
        <div id="tabs">
            <ul>
                <li><a href="/Reciplease/index.php"><h1>home</h1></a></li>
                <li><a href="popular/">popular</a></li>
                <li><a href="pantry/">pantry</a></li>
                <li><a href="profile/">profile</a></li>
                <?php
                    if (isLoggedIn()) {
                ?>
                <li><a href="logout.php">logout</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
 <img class="profilepic" src="images/default.png" title="Profile Picture" alt="Profile Picture"/>
<?php
    include "templates/homeRecipeSearch.php";
    include "templates/recipecard.php";
?>
</body>
</html>
