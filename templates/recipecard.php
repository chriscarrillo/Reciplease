<script type="text/javascript" src="../js/PopupWindow.js"></script>
<script src="../js/infiniteScroll.js"></script>

<div class="recipecard">
    <?php include "templates/homeRecipeSearch.php" ?>
    <div id="card1">
        <button id="myBtn" onclick="popup()">View Recipe</button>
        <h1><?php $title ?></h1>
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

<script>
    var elem = document.querySelector('.recipecard');
    var infScroll = new InfiniteScroll( elem, {
    // options
    path: '.pagination__next',
    append: '.post',
    history: false,
    });

    // element argument can be a selector string
    //   for an individual element
    var infScroll = new InfiniteScroll('.recipecard', {
    // options
    });
</script>

