const btnDefil = document.querySelector(".stage .btnDefil");
const stage = document.querySelector(".stage");
const descriptionStage = document.querySelector(".stage .descriptionMission");
const avisPositif = document.querySelector(".stage .avisPositif");
const avisNegatif = document.querySelector(".stage .avisNegatif");
const logoEntreprise = document.querySelector(".stage .logoEntreprise");
const entreprise = document.querySelector(".stage .entreprise");
const titreStage = document.querySelector(".stage .titre");
const like = document.querySelector(".stage .like");
const dislike = document.querySelector(".stage .dislike");
var note = document.querySelector(".note").textContent;
var sexe = document.querySelector(".sexe").textContent;
var icone = document.querySelector(".icone");
var defil = false;


window.addEventListener("load", function(){
    for (var i = 0; i < note; i++){
        document.querySelector(".star"+(i+1)).style.fill = "#EF8275";
    };

    if(sexe == 0){
        icone.innerHTML = '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">'
        +'<circle cx="27.5" cy="27.5" r="27.5" fill="#58A4B0"/>'+
        '<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1007 31.2155C16.2939 27.9208 14.3941 23.8831 14.7116 19.3588C15.6262 6.32295 33.7726 9.19067 37.3025 15.7701C40.8323 22.3494 40.4129 39.0386 35.8508 40.2145C34.0315 40.6835 30.1558 39.5347 26.2113 37.1571L29.0001 55L25.0001 54.8333L21.0001 54.1667L17.8334 53.1667L14.7117 51.8333L19.1007 31.2155Z" fill="#C9A07B"/>'+
        '<path fill-rule="evenodd" clip-rule="evenodd" d="M26.942 20.7984C27.5016 28.5937 28.9819 32.4913 31.3829 32.4913C34.9847 32.4913 38.0405 30.2048 39.6208 30.2048C40.7728 30.2048 40.5156 31.6465 39.752 32.7153C39.122 33.5972 36.0539 34.4472 36.0539 35.8144C36.0539 37.1816 38.4779 36.1239 38.4779 36.9347C38.4779 38.2759 38.904 40.7977 36.5761 40.7977C34.2202 40.7977 27.4655 39.9392 26.308 36.4427C25.5609 34.1861 25.0779 29.5101 24.8589 22.4147C24.716 22.3977 24.5705 22.3889 24.423 22.3889C22.4045 22.3889 20.7682 24.0253 20.7682 26.0438C20.7682 27.0685 21.1899 27.9947 21.8692 28.6583C21.0236 29.852 20.0758 31.0989 18.9898 32.3856C14.9098 29.9378 11.8822 22.7721 15.871 15.8884C16.9736 12.5162 19.4696 10.7149 22.4174 9.87857C24.8052 8.87971 27.2841 8.76709 29.3766 9.3659C33.4785 9.71773 37.1413 10.9685 38.1793 11.7113C38.1793 15.5947 37.4269 16.7469 30.9998 16.6453C29.4206 17.4794 28.2065 18.9155 26.942 20.7984Z" fill="black"/>'+
        '</svg>';

    }else if(sexe == 1){

        icone.innerHTML = '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">'
        +'<circle cx="27.5" cy="27.5" r="27.5" fill="#58A4B0"/>'+
        '<path fill-rule="evenodd" clip-rule="evenodd" d="M21.9055 33.6985C19.3482 30.7889 17.6173 27.2231 17.9065 23.2275C18.7399 11.7153 35.2732 14.2478 38.4893 20.0582C41.7054 25.8686 41.3232 40.6072 37.1667 41.6457C35.5091 42.0599 31.9779 41.0454 28.384 38.9457L30.6398 54.4147L27.5 55L22.5 54.5L20.5 54L19 53.5L17.5 53L21.9055 33.6985Z" fill="#B28B67"/>'+
        '<path fill-rule="evenodd" clip-rule="evenodd" d="M44.39 12.0039C44.1142 11.0641 43.3723 10.2595 42.3725 10.0208C42.13 9.96289 41.8796 9.9395 41.6301 9.94925C41.5406 9.95271 41.5155 9.97773 41.4737 9.91707C41.4427 9.8721 41.442 9.76223 41.4292 9.70938C41.3895 9.54503 41.3398 9.38273 41.2785 9.22464C41.0693 8.68543 40.7177 8.20822 40.2939 7.80622C39.5012 7.05416 38.4301 6.53513 37.3172 6.44122C36.7082 6.38986 36.1036 6.48577 35.5278 6.67782C35.2297 6.77723 34.9406 6.90102 34.6591 7.03788C34.5743 7.07907 34.2993 7.28083 34.2142 7.26776C34.1202 7.25334 33.9314 7.02703 33.855 6.97022C32.9108 6.26801 31.7447 5.99192 30.5686 6.00018C29.241 6.00987 27.9627 6.07417 26.8555 6.85859C26.6211 7.02466 26.3979 7.2065 26.1854 7.39794C26.0735 7.49873 25.9651 7.6033 25.8617 7.71222C25.7993 7.77793 25.7385 7.84512 25.6801 7.91412C25.5809 8.03123 25.5968 8.0697 25.4579 7.98799C24.925 7.6742 24.3076 7.52745 23.6856 7.60153C23.3163 7.64555 22.957 7.75302 22.6158 7.89447C22.4997 7.94263 22.2308 8.1347 22.107 8.13658C21.9842 8.13841 21.7191 7.96036 21.5926 7.9151C20.9092 7.6706 20.1727 7.61033 19.4545 7.72331C18.7136 7.83989 17.9858 8.1264 17.3581 8.52232C17.0562 8.71277 16.7928 8.92379 16.5812 9.20698C16.4898 9.32925 16.4073 9.45858 16.3037 9.57195C16.2431 9.63833 16.123 9.70644 16.0905 9.79045C16.11 9.74015 15.2803 9.43011 15.202 9.41029C14.7849 9.30469 14.3601 9.3261 13.9517 9.45639C13.1836 9.70139 12.5231 10.2508 11.9802 10.8141C11.7014 11.1035 11.4574 11.4233 11.2503 11.764C11.151 11.9272 11.0602 12.0951 10.9772 12.2666C10.9369 12.3496 10.9103 12.4535 10.8572 12.5283C10.7889 12.6247 10.743 12.6266 10.6192 12.6686C9.99062 12.8821 9.4176 13.2434 8.98124 13.7316C8.53986 14.2255 8.25346 14.8337 8.13338 15.4743C8.12632 15.512 8.12211 15.6683 8.09932 15.6888C8.06807 15.7169 7.94167 15.7045 7.89385 15.7099C7.72826 15.7287 7.56384 15.7567 7.40161 15.794C7.10255 15.8626 6.81147 15.9635 6.53612 16.0956C5.46274 16.6104 4.69516 17.5754 4.31948 18.6613C3.9253 19.8009 3.93229 21.1066 4.40341 22.2249C4.47951 22.4055 4.57007 22.5809 4.67642 22.7467C4.74173 22.8485 4.7628 22.8488 4.7204 22.9556C4.67313 23.0745 4.58679 23.1899 4.53066 23.3061C4.34755 23.685 4.21953 24.087 4.13867 24.4975C4.00601 25.1709 3.94026 25.8785 4.07113 26.557C4.1319 26.8721 4.23779 27.1801 4.39932 27.4607C4.48167 27.6037 4.57804 27.7394 4.68685 27.865C4.74334 27.9301 4.80334 27.9924 4.86609 28.052C4.90198 28.0861 4.94903 28.1159 4.97954 28.1539C5.05403 28.2467 5.06969 28.1704 5.03128 28.3067C4.97757 28.4971 4.85581 28.685 4.78124 28.8704C4.70441 29.0613 4.63497 29.2549 4.57146 29.4504C4.44282 29.8463 4.33405 30.2494 4.26603 30.6594C4.13542 31.4465 4.15836 32.2852 4.54248 33.0076C4.70672 33.3167 4.94233 33.5877 5.22811 33.7986C5.36798 33.9018 5.51949 33.9907 5.67842 34.0637C5.76008 34.1013 5.86435 34.1174 5.9016 34.194C5.9417 34.2763 5.88217 34.4397 5.8686 34.5318C5.7505 35.3324 5.69126 36.173 5.93679 36.9575C6.16294 37.6802 6.66084 38.3182 7.30729 38.7406C8.56137 39.56 10.2518 39.5138 11.5695 38.8578C11.913 38.6868 12.2343 38.4745 12.521 38.224C13.2509 39.1765 14.753 39.1463 15.8198 38.8749C17.1489 38.5369 18.2154 37.641 18.8299 36.4641C19.6701 37.4555 21.4334 37.1338 22.0161 36.0583C22.1587 35.7951 22.2433 35.5049 22.2849 35.2114C22.3068 35.057 22.2929 34.9013 22.3093 34.7481C22.3303 34.553 22.4648 34.3633 22.5421 34.1745C22.6927 33.8071 22.7862 33.4276 22.7902 33.0313C22.7923 32.8244 22.7652 32.6227 22.7449 32.4175C22.7267 32.2327 22.7795 32.0605 22.8096 31.8782C22.4687 31.9326 22.0534 31.8435 21.7322 31.7477C21.4171 31.6537 21.1219 31.4061 20.8995 31.1799C20.383 30.6548 20.0674 29.9664 19.8517 29.2813C19.378 27.7776 19.5721 25.9735 21.1325 25.1483C21.8594 24.7638 24.0371 24.7651 24.9029 24.9551C25.8132 25.1549 26.8452 27.1018 26.896 27.2848C26.9274 27.3981 26.9116 27.5383 27.019 27.6137C27.2549 27.7797 27.6439 27.4917 27.8179 27.3496C28.1182 27.1043 28.3324 26.778 28.5179 26.4471C28.9221 25.7265 29.2479 24.9536 29.4781 24.1646C29.6555 23.5563 29.769 22.9291 30.0009 22.3363C30.2317 21.7465 30.5955 21.2193 31.1612 20.8852C31.7765 20.5217 32.4819 20.3302 33.1574 20.1018C33.827 19.8754 34.485 19.5987 35.0041 19.1184C35.1182 19.0127 35.2291 18.9005 35.3209 18.7761C35.3935 18.678 35.4651 18.49 35.5756 18.4278C35.7474 18.3309 35.9981 18.5828 36.1466 18.6742C36.8795 19.1253 37.4908 19.7545 37.984 20.4419C38.4743 21.1255 38.8767 21.7832 39.2037 22.5466C39.4462 23.1127 39.5976 23.8377 40.0241 24.3017C40.2146 24.5088 41.6301 24.6342 42.0886 24.4533C42.5471 24.2724 43.061 23.8028 43.2149 23.5085C43.3724 23.2073 43.41 22.8763 43.3427 22.5466C43.3031 22.3525 43.2223 22.1713 43.1781 21.9807C43.1408 21.8207 43.107 21.6694 43.0266 21.5227C42.8743 21.2448 42.614 21.0451 42.3001 20.9616C42.6268 20.6697 42.8974 20.3204 43.0847 19.9301C43.2793 19.5245 43.4443 19.0313 43.491 18.5862C43.5291 18.2246 43.4704 17.85 43.2662 17.5393C43.052 17.2134 42.6725 17.0007 42.3442 16.7974C42.8457 16.4171 43.2749 15.9545 43.6278 15.4424C44.3141 14.4465 44.7385 13.1912 44.39 12.0039Z" fill="#111111"/>'+
        '</svg>';


    }

});

btnDefil.addEventListener("click", function(){
    if(defil == false){       
        btnDefil.style.transform = "rotateZ(180deg)";
        stage.style.height = "475px";
        avisPositif.style.visibility = "visible";
        avisPositif.style.opacity = "1";
        avisNegatif.style.visibility = "visible";
        avisNegatif.style.opacity = "1";
        entreprise.style.visibility = "visible";
        entreprise.style.opacity = "1";
        like.style.visibility = "visible";
        like.style.opacity = "1";
        dislike.style.visibility = "visible";
        dislike.style.opacity = "1";
        icone.style.visibility = "visible";
        icone.style.opacity = "1";
        titreStage.style.top = "20px";
        titreStage.style.left = "35%";
        descriptionStage.style.top = "45%";
        descriptionStage.style.left = "33%";
        descriptionStage.style.width = "35%";
        defil = true;
    }else{
        btnDefil.style.transform = "rotateZ(0deg)";
        stage.style.height = "175px";
        avisPositif.style.visibility = "hidden";
        avisPositif.style.opacity = "0";
        avisNegatif.style.visibility = "hidden";
        avisNegatif.style.opacity = "0";
        entreprise.style.visibility = "hidden";
        entreprise.style.opacity = "0";
        like.style.visibility = "hidden";
        like.style.opacity = "0";
        dislike.style.visibility = "hidden";
        dislike.style.opacity = "0";
        icone.style.visibility = "hidden";
        icone.style.opacity = "0";
        titreStage.style.top = "20px";
        titreStage.style.top = "5px";
        titreStage.style.left = "50%";
        descriptionStage.style.top = "50%";
        descriptionStage.style.left = "50%";
        descriptionStage.style.width = "50%";

        defil = false;
    }
});

