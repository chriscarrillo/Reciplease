<div class="recipecard">
    <!-- Trigger/Open The Modal -->
    <div id="card1">
        <h2><?php echo $title ?></h2>
        <img src="<?php echo $image ?>" height="150" width="150" align="right">
        <button id="myBtn" class="button" onclick="openModal(0)">View Recipe</button>
        <!-- The Modal -->
        <div class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close" onclick="closeModal(0)">&times;</span>
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
        <button id="myBtn1" class="button" onclick="openModal(1)">View Recipe</button>
        <!-- The Modal -->
        <div class="modal">

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