<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | bookmarks</title>
    <?php include "../templates/head.php" ?>
</head>  
<body id="bookmarksPage">
<?php include "../templates/functions.php" ?>
    <div id="bookmarks">
        <?php
            session_start();

            if (!isLoggedIn()) {
                header("Location: ..");
            }

            include "../templates/logo.php";
        ?>
    </div>
    <form action="" method="get" id="searchForm" class="form">
            <input type="textSearch" id="search" name="search" placeholder="search" /><br />
    </form>
    <div id="title">
        <h1 id="title1">start your...</h1>
        <h1 id="title2">food journey here</h1>
    </div>
    <div id="tabs">
        <ul>
            <li><h1>bookmarks</h1></li>
            <li><a href="../index.php">home</a></li>
            <li><a href="../popular/">popular</a></li>
            <li><a href="../pantry/">pantry</a></li>
            <li><a href="../profile/">profile</a></li>
            <?php
                if (isLoggedIn()) {
            ?>
            <li><a href="../logout.php">logout</a></li>
            <?php
                }
            ?>
        </ul>
    </div>
    <img class="profilepic" src="../images/testimage.jpg" title="Profile Picture" alt="Profile Picture" />;
<?php
//    include "../templates/profilepic.php";
    include "../templates/recipecard.php";
?>
       
<!--<h1>Reciplease</h1>-->
</body>
</html>
