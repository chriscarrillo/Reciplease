<div class="recipecard">
    <div id="card1">
        <button id="myBtn" onclick="popup()">View Recipe</button>
        <h2><?php echo $title ?></h2>
        <a href="<?php echo $url ?>">Visit Recipe</a>
        <img src="<?php echo $image ?>" height="120" width="120" align="right">
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Insert Recipe info</p>
            </div>
        </div>  
    </div>    
    
    <div id ="card2">
        <button id="myBtn" onclick="popup()">View Recipe</button>
        <h2><?php echo $title1 ?></h2>
        <a href="<?php echo $url1 ?>">Visit Recipe</a>
        <img src="<?php echo $image1 ?>" height="120" width="120" align="right">
        <h1><?php $title1 ?></h1>
        <div id="myModal" class="modal">
            
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Insert Recipe 2 info</p>
            </div>
        </div>  
    </div>
</div>