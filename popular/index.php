<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | Popular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/png" href="../images/favicon.png" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/default.css" />
    <link rel="stylesheet" type="text/css" href="../styles/medium.css" media="only screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="../styles/small.css" media="only screen and (max-width: 750px)" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
</head>  
    <body id="homePage">
    <?php include "../templates/functions.php" ?>
        <div id="home">
            <?php
                session_start();
                include "../templates/logo.php";
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
                <li><a href="../Reciplease/index.php"><h1>home</h1></a></li>
                <li><a href="../popular/">popular</a></li>
                <li><a href="../pantry/">pantry</a></li>
                <li><a href="../profile/">profile</a></li>
                <?php
                    if (isLoggedIn()) {
                ?>
                <li><a href="../logout.php">logout</a></li>
                <img class="profilepic" src="<?= $_SESSION["profilePicture"] ?>" title="Profile Picture" alt="Profile Picture"/>
                <?php
                    } else {
                ?>
                <li><a href="../login/">login</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
        
        <div class="container clear">
            <div class="row">
                <div class="results"></div>
            </div>
            <div class="text-center" id="loading">
                <img src="../images/ajax-loader.gif" id="ani_img" style="width: 50px" />
            </div>
        </div>
    
        <script type="text/javascript" src="../js/scrollPop.js"></script>
</body>
</html>
