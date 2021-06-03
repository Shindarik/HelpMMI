$(document).ready(function(){

    var check = false;

    $(".btnDefil").each(function(){
        $(this).on("click", function(){
            $(this).parent().toggleClass("active");
        });
    });

    $(".card").each(function(){
        $(this).on("click", function(){
            var domaineCard = $(this).attr("data-domaine");
            if(check == false){
                check = true;
                $(this).css({"box-shadow" : "8px 10px #58A4B0", "transform" : "translate(-8px, -10px)"});
                $(".stage").each(function() {
                    if($(this).attr("data-domaine") == domaineCard){
                        $(this).show();
                    }else{
                        $(this).hide();
                    } 
                });

            }else{
                check = false;
                $(".card").css({"box-shadow" : "", "transform" : ""});
                $(".stage").show();
            }
            
        });
    });

})