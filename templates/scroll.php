<?php
    include "../unirest/src/Unirest.php";
    include "functions.php";

    //remember, commas are represented by %2C+ in the API call
    $addRecipeInformation = "true";
    $diet;
    $fillIngredients = "true";
    $includeIngredients = "";
    $instructionsRequired = "false";
    $numberOfResults = "10";
    $numOfCalls = $_POST["page"];
    $offset = ($numOfCalls);
    $numOfRecipes = ($offset - 1);

    $recipesLoaded = ($_POST["page"] * (int) $numberOfResults) - ((int) $numberOfResults);

    $getUserIngredients = getIngredients($_SESSION["id"]);
    $ingredientsArray = array();

    if ($getUserIngredients != null) {
        while ($row = $getUserIngredients->fetch_assoc()) {
            array_push($ingredientsArray, $row["IngredientName"]);
        }

        $includeIngredients = implode("%2C+", $ingredientsArray);
    }

    $getUserDietaryRestrictions = getDietaryRestrictions($_SESSION["id"]);
    $restrictionsArray = array();

    if ($getUserDietaryRestrictions != null) {
        while ($row = $getUserDietaryRestrictions->fetch_assoc()) {
            array_push($restrictionsArray, $row["Restriction"]);
        }
        
        $diet = implode("%2C+", $restrictionsArray);
    }

    var_dump($ingredientsArray);
    var_dump($restrictionsArray);
    
    if (empty($ingredientsArray) && empty($restrictionsArray)) {
        print "Ingredients array is empty and restrictions array is empty";
         $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&fillIngredients=".$fillIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=".$offset."&ranking=2",
            array(
                "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
                ));
    } else if (empty($ingredientsArray) && !empty($restrictionsArray)) {
        print "Ingredients array is empty and restrictions array is NOT empty";
         $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&diet=".$diet."&fillIngredients=".$fillIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=".$offset."&ranking=2",
            array(
                "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
                ));
    } else if (!empty($ingredientsArray) && empty($restrictionsArray)) {
        print "Ingredients array is NOT empty and restrictions array is empty";
        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&fillIngredients=".$fillIngredients."&includeIngredients=".$includeIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=".$offset."&ranking=2",
            array(
                "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
                ));
    }

    //            if ($response != NULL){
    //                echo "Successful API call.";
    //            }
    // echo $response->raw_body; // Print raw response

    $body = $response->body;  // Parsed response saved as an stdClass

    //echo $body->results[0]->analyzedInstructions[0]->steps[0]->number;
    //echo $body->results[0]->analyzedInstructions[0]->steps[0]->step;


//    $url1=$body->results[1]->spoonacularSourceUrl;
//    $image1=$body->results[1]->image;
//    $title1=$body->results[1]->title;
//    $score1=$body->results[1]->healthScore;
//    $time1=$body->results[1]->readyInMinutes;


    //        echo $url;
    //        echo $image;
    //        echo $title;
    //            
    //        echo $url1;
    //        echo $image1;
    //        echo $title1;

    /*****EXAMPLE OF A SEARCH QUERY FOR POPULATING THE HOME PAGE***********************
    ******VARIABLES - EXPLAINED (to be filled with user info from our DB):

    * Returns more info about recipes (this includes instructions for prep): "addRecipeInformation=true"
    * The cuisine is american (Should we search only by this?): "cuisine=american"
    * The diet is paleo: "diet=paleo"
    * We will leave fillIngredients false: "fillIngredients=false"
    * I am searching by ingredients beef, cheese: "includeIngredients=beef%2C+cheese"
    * The recipes MUST have instructions: "instructionsRequired=true"
    * Dont display proper attribution for recipes: "limitLicense=false"
    * How many results we want: "number=1"
    * Maximize used ingredients first (dont worry too much about this): "ranking=1"
    ***********************************************************************************/

for ($i = 0; $i < (int) $numberOfResults; $i++) {
    $url=$body->results[$i]->spoonacularSourceUrl;
    $image=$body->results[$i]->image;
    $title=$body->results[$i]->title;
    $score=$body->results[$i]->healthScore;
    $time=$body->results[$i]->readyInMinutes;
    $count=$body->results[$i]->missedIngredientCount;
    $ingredientArray=array();
    for($j=0; $j<$count; $j++){
        $ingredients=$body->results[$i]->missedIngredients[$j]->name;
        array_push($ingredientArray, $ingredients);
    }

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
                <h3>Ingredients</h3>
                <?php foreach($ingredientArray as $food){ ?>
                    <p><?php echo $food;  ?></p>    
                <?php } ?>
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