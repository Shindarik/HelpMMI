$(document).ready(function(){

    $(".btnDefil").each(function(){
        $(this).on("click", function(){
            $(this).parent().toggleClass("active");
        });
    });
})



// card.forEach(element => {
//     element.addEventListener("click", function(){
//         var domaineNum = this.getAttribute("data-domaine");

//         filtreJS.replaceWith = '<?php $domaineChoix = '+domaineNum+'?>';

//         console.log(domaineNum);
//     });
// });


