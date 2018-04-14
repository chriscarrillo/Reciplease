var myPage = 1;
loadContent(myPage);
$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        myPage++;
        loadContent(myPage);
    }
})

function loadContent(myPage) {
    $("#ani_img").show();
    $.post("templates/scroll.php", {page:myPage}, function(data) {
        if (data.trim().length == 0) {
            $("#loading").text("End of Page");
        }
        $(".results").append(data);
        $(".well").animate({scrollTop: $("#loading").offset().top}, 5000, "easeOutBounce");
        $("#ani_img").hide();
    })
}