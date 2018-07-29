var linkChat = $(".linkChat");
var chatContent = $(".chatContent");

$(function () {
    linkChat.click(function () {
        var mylink = $(this).attr("data-mylink");
        chatContent.hide();
        $("#"+mylink).show();
    });
});