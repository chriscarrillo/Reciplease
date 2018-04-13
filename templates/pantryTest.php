<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | pantry</title>
    <?php include "head.php" ?>
</head>  
<body id="pantryPage">
<?php include "functions.php" ?>
    <div id="pantry">
        <?php
                       include "logo.php";
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
        <input type="number" id="quantityOnHand" name="quantityOnHand" placeholder="quantity on hand" required /><br />
        <input type="submit" id="itemButton" class="button" name="addItem" value="add new item" />
    </form>
    
     <?php
            if (isset($_POST["itemButton"])) {
                $ItemName = $_POST["itemName"];
                $QuantityOnHand = $_POST["quantityOnHand"];
                
                addIngredient($ItemName, $QuantityOnHand);
            }
    ?>
<!--<h1>Reciplease</h1>-->
</body>
</html>
