<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | pantry</title>
    <?php include "../templates/head.php" ?>
</head>  
<body id="homePage">
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
        <input type="checkbox" name="delete" value="delete"> Check to delete item entered
        <input type="submit" id="itemButton" class="button" name="addItem" value="submit" />
    </form>
    <table style="width:50%" align="center">
      <tr>
        <th>Ingredients</th>
        <th>Quantity</th>
      </tr>
     <?php
        $ingredients = getIngredients($_SESSION["id"]);
        $num_of_rows = $ingredients->num_rows;
        // echo $ingredients;
        while($row = $ingredients->fetch_assoc()) {
            ?>
        <tr>
           <td><?php echo $row["IngredientName"];?></td>
           <td><?php echo $row["Quantity"];?></td>
        </tr>
        <?php
        }
    
        if (isset($_POST["addItem"])) {
            if ($_POST['delete'] == 'delete') {
                $itemName = $_POST["itemName"];
                $quantity = $_POST["quantity"];
                removeIngredient($_SESSION["id"], $itemName, $quantity);
                header("Refresh:0");
            } else {
                $itemName = $_POST["itemName"];
                $quantity = $_POST["quantity"];
                addIngredient($_SESSION["id"], $itemName, $quantity);
                header("Refresh:0");
            }
        }
    
    ?>
    </table>
<!--<h1>Reciplease</h1>-->
</body>
</html>