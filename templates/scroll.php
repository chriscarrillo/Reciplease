<?php
    include "../unirest/src/Unirest.php";

    //remember, commas are represented by %2C+ in the API call
    $addRecipeInformation = "true";
    $diet = "paleo%2C+primal";
    $fillIngredients = "false";
    $includeIngredients = "beef%2C+cheese";
    $instructionsRequired = "false";
    $numberOfResults = "1";
    $numOfCalls = $_POST["page"];
    $offset = ($numOfCalls);
    $numOfRecipes = ($offset - 1);


    $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&diet=".$diet."&fillIngredients=".$fillIngredients."&includeIngredients=".$includeIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=".$offset."&ranking=2",
        array(
            "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
            "Accept" => "application/json"
            ));

    //            if ($response != NULL){
    //                echo "Successful API call.";
    //            }


    // echo $response->raw_body; // Print raw response

    $body = $response->body;  // Parsed response saved as an stdClass
    //var_dump($body); //print out stdClass of the $response->body

    $url=$body->results[0]->spoonacularSourceUrl;
    $image=$body->results[0]->image;
    $title=$body->results[0]->title;
    $score=$body->results[0]->healthScore;
    $time=$body->results[0]->readyInMinutes;

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

?>

<div class="recipecard">
    <!-- Trigger/Open The Modal -->
    <div class="card1">
        <h2><?php echo $title ?></h2>
        <img src="<?php echo $image ?>" height="150" width="150" align="right">
        <button class="button" onclick="openModal(<?= $numOfRecipes ?>)">View Recipe</button>
        <!-- The Modal -->
        <div class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close" onclick="closeModal(<?= $numOfRecipes ?>)">&times;</span>
              <h2><?php echo $title ?></h2>
            </div>
            <div class="modal-body">
              <p><?php echo "Time:".$time." Minutes   Score:".$score."/100" ?></p>
              <p>Some other text...</p>
            </div>
            <div class="modal-footer">
              <h3><a href="<?php echo $url ?>">Visit Recipe</a></h3>
            </div>
          </div>
        </div>  
    </div>
     
    
</div>