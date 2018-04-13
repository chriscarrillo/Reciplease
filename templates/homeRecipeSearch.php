<!--
<!DOCTYPE html> 
<html>
    <body>
-->
        <?php
        include 'unirest/src/Unirest.php';
    
        //remember, commas are represented by %2C+ in the API call
        $addRecipeInformation = "true";
        $diet = "paleo%2C+primal";
        $fillIngredients = "false";
        $includeIngredients = "beef%2C+cheese";
        $instructionsRequired = "false";
        $numberOfResults = "2";
        
    
        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=".$addRecipeInformation."&diet=".$diet."&fillIngredients=".$fillIngredients."&includeIngredients=".$includeIngredients."&instructionsRequired=".$instructionsRequired."&limitLicense=false&number=".$numberOfResults."&offset=0&ranking=2",
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
        
        $url=$body->results[0]->sourceUrl;
        $image=$body->results[0]->image;
        $title=$body->results[0]->title;
        
        $url1=$body->results[1]->sourceUrl;
        $image1=$body->results[1]->image;
        $title1=$body->results[1]->title;
        
        
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
<!--
    </body>
</html>
-->
