const btnDefil = document.querySelector(".btnDefil");
var note = document.querySelector(".note").textContent;


window.addEventListener("load", function(){
    for (var i = 0; i < note; i++){
        console.log(i+1);
        document.querySelector(".star"+(i+1)).style.fill = "#EF8275";
    };
});

btnDefil.addEventListener("onclick", function(){
    
});

