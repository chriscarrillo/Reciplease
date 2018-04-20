
<!DOCTYPE html> 
<html>
    <body>


<!-- CALL TO POPULATE POPULAR PAGE -->
        <?php
        include "../unirest/src/Unirest.php";
    
        // These code snippets use an open-source library. http://unirest.io/php
        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/random?l
        limitLicense=false&number=1",
        array(
         "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
        ));
        $body = $response->body;      

        $url=$body->recipes[0]->spoonacularSourceUrl;   
        $image=$body->recipes[0]->image;
        $title=$body->recipes[0]->title;
        $score=$body->recipes[0]->healthScore;
        $time=$body->recipes[0]->readyInMinutes;
        
        echo $url;
        echo $image;
        echo $title;
        echo $score;
        echo $time;
        
        ?>

    </body>
</html>
