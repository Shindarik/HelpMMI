const btnDefil = document.querySelectorAll(".btnDefil");
const stage = document.querySelectorAll(".stage");
const card = document.querySelectorAll(".card");



btnDefil.forEach(element => {
    element.addEventListener("click", function(){
        this.parentElement.classList.toggle("active");
    });
});

card.forEach(element => {
    element.addEventListener("click", function(){
        var domaineNum = this.getAttribute("data-domaine");

        var code = document.createTextNode(`<?php 
        $domaineChoix = `+domaineNum+`;
        if($domaineChoix){
           $sql = "SELECT COUNT(id_domaine)
           FROM stage
           WHERE id_domaine = $domaineChoix GROUP BY id_domaine";
           $req = $link -> prepare($sql);
           $req -> execute();
           while($data = $req -> fetch()){
               echo '<script>alert("'.$data["COUNT(id_domaine)"].'")</script>';
           };
       }
   ?>`);

        this.appendChild(code);

        console.log(domaineNum);
    });
});


