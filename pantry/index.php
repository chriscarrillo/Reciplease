<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | pantry</title>
    <?php include "../templates/head.php" ?>
</head>  
<body id="pantryPage">
<?php include "../templates/functions.php" ?>
    <div id="pantry">
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
            <li><h1>pantry</h1></li>
            <li><a href="../index.php">home</a></li>
            <li><a href="../popular/">popular</a></li>
            <li><a href="../bookmark/">bookmarks</a></li>
            <li><a href="../profile/">profile</a></li>
        </ul>
    </div>
    <img class="profilepic" src="../images/default.png" title="Profile Picture" alt="Profile Picture" />
    
    <form method="post" id="ingredientForm" class="form" enctype="multipart/form-data">
        <input type="text" id="itemName" name="itemName" placeholder="item name" required /><br />
        <input type="number" id="quantity" name="quantity" placeholder="quantity on hand" required /><br />
        <input type="submit" id="itemButton" class="button" name="addItem" value="add new item" />
    </form>
    
     <?php
        $ingredients = getIngredients($_SESSION["id"]);
        $row = $userdata->fetch_array(MYSQLI_ASSOC);
    
        for($i=0; $i<sizeof($row); $i++) {
            echo $row["IngredientName"]+"    "+$row["Quantity"];
        }
        
        if (isset($_POST["addItem"])) {
            $itemName = $_POST["itemName"];
            $quantity = $_POST["quantity"];

            addIngredient($_SESSION["id"], $itemName, $quantity);
            $ingredients = getIngredients($_SESSION["id"]);
            $row = $userdata->fetch_array(MYSQLI_ASSOC);
        }
    
    ?>
<!--<h1>Reciplease</h1>-->
</body>
</html>