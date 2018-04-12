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
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/infiniteScroll.js"></script>
    <script type="text/javascript" src="js/PopupWindow.js"></script>
    <!-- see here for infinite scroll implementation - https://infinite-scroll.com/-->
</head>  
    <body id="homePage">
        <div id="home">
            <?php
//            include 'unirest-php/src/Unirest.php';
//            include "templates/logo.php";
//            
//                $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=true&cuisine=american&diet=paleo&fillIngredients=false&includeIngredients=beef%2C+cheese&instructionsRequired=true&limitLicense=false&number=20&offset=0&ranking=1",
//                array("X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR","Accept" => "application/json"));
//            
//                echo $response;
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
            </ul>
        </div>
 <img class="profilepic" src="images/default.png" title="Profile Picture" alt="Profile Picture"/>
<?php
    include "templates/recipecard.php";
?>


</body>
</html>
