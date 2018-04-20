$(document).ready(function() {
    if ($("#redBox").height() != $("#centerBox").height()) {
        $("#redBox").css("height", $("#centerBox").outerHeight() + "px");
        $("#redBox").css("opacity", "1");
    }
});

function search(searchText) {
    console.log("Search function called");
    $("#ani_img").show();
    $.post("../templates/search.php", {search: searchText}, function(data) {
        console.log("Inner function called");
        if (data.trim().length == 0) {
            $("#loading").text("End of Page");
        }
        $(".results").append(data);
        $(".well").animate({scrollTop: $("#loading").offset().top}, 5000, "easeOutBounce");
        $("#ani_img").hide();
    })
}