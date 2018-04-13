<!--
<!DOCTYPE html> 
<html>
    <body>
-->

<!-- CALL TO POPULATE POPULAR PAGE -->
        <?php
        include '../unirest/src/Unirest.php';
    
        // These code snippets use an open-source library. http://unirest.io/php
        $response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/random?l           limitLicense=false&number=2",
        array(
         "X-Mashape-Key" => "dpET0hwYnZmsh4tN4yi4Tx0EW4php1svA7QjsniM24UU0xoOYR",
                "Accept" => "application/json"
        ));
       

        $body = $response->body;
        //var_dump($body);
        
        ?>
<!--
    </body>
</html>
-->
