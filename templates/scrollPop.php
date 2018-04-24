<?php
    include "../unirest/src/Unirest.php";

    $numberOfResults = "10";
    $recipesLoaded = ($_POST["page"] * (int) $numberOfResults) - ((int) $numberOfResults);

        // These code snippets use an open-source library. http://unirest.io/php
    $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/random?l
    limitLicense=false&number=10",
        array(
         "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
        ));
    $body = $response->body;      
    
    for ($i = 0; $i < (int) $numberOfResults; $i++) {
        $url=$body->recipes[$i]->spoonacularSourceUrl;    
        $image=$body->recipes[$i]->image;
        $title=$body->recipes[$i]->title;
        $score=$body->recipes[$i]->healthScore;
        $time=$body->recipes[$i]->readyInMinutes;
?>

<div class="recipecard">
    <!-- Trigger/Open The Modal -->
    <div class="card1">
        <h2><?php echo $title ?></h2>
        <img src="<?php echo $image; ?>" height="150" width="150" align="right">
        <button class="button" onclick="openModal(<?= $recipesLoaded ?>)">View Recipe</button>
        <!-- The Modal -->
        <div class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close" onclick="closeModal(<?= $recipesLoaded ?>)">&times;</span>
              <h2><?php echo $title; ?></h2>
            </div>
            <div class="modal-body">
              <h3><?php echo "Time: ".$time." Minutes" ?></h3>
              <h3><?php echo "Score:".$score."/100" ?></h3>
            </div>
            <div class="modal-footer">
              <h3><a href="<?php echo $url; ?>" target="_blank">Visit Recipe</a></h3>
            </div>
          </div>
        </div>  
    </div>
</div>
<?php
    $recipesLoaded++;
}
?>
