<!DOCTYPE html> 
<html>
    <body>
        <?php
        include '../unirest/src/Unirest.php';    
    
        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/searchComplex?addRecipeInformation=true&cuisine=american&diet=paleo&fillIngredients=false&includeIngredients=beef%2C+cheese&instructionsRequired=true&limitLicense=false&number=1&offset=0&ranking=1",
            array(
                "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
                ));
        
            if ($response != NULL){
                echo "Successful API call.";
            }
           
        
       // echo $response->raw_body; // Print raw response
        
        $body = $response->body;  // Parsed response saved as an stdClass
        //var_dump($body); //print out stdClass of the $response->body
        
        $url=$body->results[0]->sourceUrl;
        $image=$body->results[0]->image;
        $title=$body->results[0]->title;
        
        echo $url;
        echo $image;
        echo $title
        
        
        

        
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
    </body>
</html>
