<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/medium.css" media="only screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="styles/small.css" media="only screen and (max-width: 750px)" />
    <script type="text/javascript" src="js/kotlin.js"></script>
    <script type="text/javascript" src="js/kotlinx-html-js.js"></script>
    <script type="text/javascript" src="js/PopupKotlinToJs.js"></script>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal');

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
</script>
</body>
</html>