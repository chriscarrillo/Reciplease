<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/medium.css" media="only screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="styles/small.css" media="only screen and (max-width: 750px)" />
    <script type="text/javascript" src="js/PopupWindow.js"></script>
</head>
<body onload="popup()">

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
</body>
</html>