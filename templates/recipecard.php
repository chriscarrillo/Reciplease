<div class="recipecard">
            <!-- Trigger/Open The Modal -->
    <div id="card1">
        <h2><?php echo $title ?></h2>
        <img src="<?php echo $image ?>" height="150" width="150" align="right">
        <button id="myBtn" class="button">View Recipe</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
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
     
    <div id="card2">
        <h2><?php echo $title1 ?></h2>
        <img src="<?php echo $image1 ?>" height="150" width="150" align="right">
            <!-- Trigger/Open The Modal -->
        <button id="myBtn1" class="button">View Recipe</button>
        <!-- The Modal -->
            <div id="myModal1" class="modal1">

              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close1">&times;</span>
                  <h2><?php echo $title1 ?></h2>
                </div>
                <div class="modal-body">
                  <p><?php echo "Time:".$time1." Minutes   Score:".$score1."/100" ?></p>
                  <p>Some other text...</p>
                </div>
                <div class="modal-footer">
                  <h3><a href="<?php echo $url1 ?>">Visit Recipe</a></h3>
                </div>
              </div>

            </div>
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
    // Get the modal
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks the button, open the modal 
    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }


</script>