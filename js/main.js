$(document).ready(function() {
    if ($("#redBox").height() != $("#centerBox").height()) {
        $("#redBox").css("height", $("#centerBox").outerHeight() + "px");
        $("#redBox").css("opacity", "1");
    }
});

function search(searchText) {
    $.post("../templates/search.php", {search: searchText}, function(data) {
        $(".results").append(data);
        $(".well").animate({scrollTop: $("#loading").offset().top}, 5000, "easeOutBounce");
        $("#ani_img").hide();
    })
}