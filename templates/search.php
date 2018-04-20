<?php
    include "../unirest/src/Unirest.php";

    $addRecipeInformation = "true";
    // $diet;
    $fillIngredients = "true";
    $includeIngredients = "";
    $instructionsRequired = "false";
    $numberOfResults = "10";
    $numOfCalls = $_POST["page"];
    // $offset = ($numOfCalls);
    $offset = 0;
    $numOfRecipes = ($offset - 1);

    $search = $_POST["search"];
    
    $query = preg_replace('/\s+/', '+', $search);
    
    $recipesLoaded = ($_POST["page"] * (int) $numberOfResults);
    
    $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&fillIngredients=".$fillIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=".$offset."&query=".$query."&ranking=2",
        array(
            "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
            "Accept" => "application/json"
            ));
    
    $body = $response->body;      
    
    for ($i = 0; $i < (int) $numberOfResults; $i++) {
        $url=$body->results[$i]->spoonacularSourceUrl;    
        $image=$body->results[$i]->image;
        $title=$body->results[$i]->title;
        $score=$body->results[$i]->healthScore;
        $time=$body->results[$i]->readyInMinutes;
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