const btnDefil = document.querySelectorAll(".btnDefil");
const stage = document.querySelectorAll(".stage");
const cardAudiovisuel = document.querySelector(".card audiovisuel");
const cardGraphisme = document.querySelector(".card graphisme");
const cardDeveloppement = document.querySelector(".card developpement");
const cardCommunication = document.querySelector(".card communication");


btnDefil.forEach(element => {
    element.addEventListener("click", function(){
        this.parentElement.classList.toggle("active");
    });
});


