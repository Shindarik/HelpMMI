$(document).ready(function(){
    $(".btnDefil").each(function(){
        $(this).on("click", function(){
            $(this).parent().toggleClass("active");
        });
    });
});