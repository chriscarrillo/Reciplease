$(document).ready(function() {
    if ($("#redBox").height() != $("#centerBox").height()) {
        $("#redBox").css("height", $("#centerBox").outerHeight() + "px");
        $("#redBox").css("opacity", "1");
    }
});