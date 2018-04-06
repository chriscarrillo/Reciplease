<script type="text/javascript" src="../js/PopupWindow.js"></script>
<script src="../js/infiniteScroll.js"></script>

<body onload="popup()">
<div class="recipecard">
    <div id="card1">
        <button id="myBtn">View Recipe</button>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Insert Recipe info</p>
            </div>
        </div>  
    </div>    
    
    <div id ="card2">
        <button id="myBtn">View Recipe</button>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Insert Recipe 2 info</p>
            </div>
        </div>  
    </div>
</div>
</body>

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

