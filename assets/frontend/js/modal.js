$(".btnxa").click(function() {
    let id = $(this).attr("id");
    let show = $("." + id).css("display");
    if (show == "none") {
        $("." + id).toggleClass("active");
        $(".wrapper").toggleClass("active");
    } else {
        $("." + id).toggleClass("active");
        $(".wrapper").removeClass("active");
    }
})
$(".close").click(function() {
    $(".modalx").removeClass("active");
    $(".wrapper").removeClass("active");
})