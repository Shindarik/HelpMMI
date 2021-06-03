<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/faviconHelpMMI.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/required.css">
    <link rel="stylesheet" href="../assets/stages.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Stages - HelpMMI</title>
</head>

<body>

    <?php
        include '../assets/connect.php';
    ?>
    
    <nav>
        <div class="logoIndex">
            <a href="../index.php"> 
                <svg width="125" height="90" viewBox="0 0 256 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M140.443 103.727C139.817 101.948 139.503 99.5012 139.503 96.3876V89.8491H147.96V95.4535C147.96 99.2788 148.452 101.725 149.437 102.793C149.884 103.237 150.51 103.504 151.316 103.593C152.121 103.771 153.15 103.86 154.403 103.86H159.772V112H155.477C152.345 112 149.839 111.689 147.96 111.066C146.081 110.443 144.515 109.554 143.262 108.397C141.92 107.063 140.98 105.506 140.443 103.727Z" fill="white"/>
                    <path d="M147.96 23.1296V16.7245C147.96 12.8992 148.452 10.4973 149.437 9.51875C150.063 8.89603 150.868 8.54019 151.853 8.45123C152.837 8.36227 154.269 8.31779 156.148 8.31779H159.772V0.178008H155.477C152.345 0.178008 149.839 0.489365 147.96 1.11208C146.081 1.64583 144.515 2.53543 143.262 3.78086C141.92 5.02629 140.98 6.5386 140.443 8.31779C139.817 10.097 139.503 12.5434 139.503 15.6569V23.1296H147.96Z" fill="white"/>
                    <path d="M255.06 103.549C255.687 101.77 256 99.3232 256 96.2096V89.8492H247.543V95.2755C247.543 99.1008 247.051 101.547 246.067 102.615C245.619 103.059 244.993 103.326 244.188 103.415C243.382 103.593 242.353 103.682 241.1 103.682H235.731V111.822H240.027C243.159 111.822 245.664 111.511 247.543 110.888C249.423 110.265 250.989 109.376 252.242 108.219C253.584 106.885 254.523 105.328 255.06 103.549Z" fill="white"/>
                    <path d="M247.543 23.1297H256V15.4789C256 12.3654 255.687 9.91897 255.06 8.13978C254.523 6.36059 253.584 4.84828 252.242 3.60285C250.989 2.35742 249.423 1.46782 247.543 0.93407C245.664 0.311356 243.159 0 240.027 0H235.731V8.13978H239.355C241.235 8.13978 242.666 8.18426 243.651 8.27322C244.635 8.36218 245.441 8.71802 246.067 9.34074C247.051 10.3193 247.543 12.7212 247.543 16.5464V23.1297Z" fill="white"/>
                    <path d="M33.155 31.541V72.0175H30.1885V52.7623H2.9665V72.0175H0V31.541H2.9665V50.1602H30.1885V31.541H33.155Z" fill="white"/>
                    <path d="M72.0948 57.6195H45.978C46.0555 59.971 46.6566 62.0719 47.7811 63.9222C48.9057 65.734 50.418 67.1411 52.3181 68.1434C54.257 69.1456 56.4286 69.6468 58.8328 69.6468C60.8104 69.6468 62.633 69.2998 64.3004 68.6059C66.0067 67.8735 67.422 66.8134 68.5466 65.4256L70.2334 67.3338C68.915 68.9143 67.2475 70.1286 65.2311 70.9767C63.2534 71.8248 61.1013 72.2488 58.7746 72.2488C55.7499 72.2488 53.0549 71.5935 50.6894 70.2828C48.324 68.9722 46.4627 67.1604 45.1055 64.8474C43.787 62.5345 43.1278 59.8939 43.1278 56.9256C43.1278 53.9958 43.7482 51.3745 44.9891 49.0616C46.2688 46.7101 48.0138 44.879 50.2241 43.5683C52.4345 42.2576 54.9162 41.6023 57.6694 41.6023C60.4227 41.6023 62.885 42.2576 65.0566 43.5683C67.2669 44.8404 68.9925 46.633 70.2334 48.9459C71.5131 51.2589 72.1529 53.8802 72.1529 56.8099L72.0948 57.6195ZM57.6694 44.1466C55.5367 44.1466 53.6172 44.6284 51.9109 45.5921C50.2047 46.5173 48.8281 47.8473 47.7811 49.582C46.7729 51.2781 46.1912 53.2056 46.0361 55.3643H69.3028C69.1864 53.2056 68.6048 51.2781 67.5578 49.582C66.5108 47.8858 65.1342 46.5559 63.4279 45.5921C61.7217 44.6284 59.8022 44.1466 57.6694 44.1466Z" fill="white"/>
                    <path d="M81.1501 29.1124H84.0584V72.0175H81.1501V29.1124Z" fill="white"/>
                    <path d="M111.556 41.6023C114.387 41.6023 116.946 42.2576 119.234 43.5683C121.522 44.879 123.306 46.6908 124.586 49.0037C125.904 51.3167 126.563 53.9573 126.563 56.9256C126.563 59.8939 125.904 62.5537 124.586 64.9052C123.306 67.2182 121.522 69.03 119.234 70.3407C116.946 71.6128 114.387 72.2488 111.556 72.2488C108.881 72.2488 106.457 71.632 104.285 70.3985C102.114 69.1264 100.427 67.3724 99.2249 65.1365V83.2353H96.3166V41.8336H99.1086V48.9459C100.311 46.633 101.998 44.8404 104.169 43.5683C106.379 42.2576 108.842 41.6023 111.556 41.6023ZM111.382 69.6468C113.708 69.6468 115.802 69.1071 117.664 68.0277C119.525 66.9483 120.979 65.4449 122.026 63.5175C123.112 61.59 123.655 59.3927 123.655 56.9256C123.655 54.4584 123.112 52.2611 122.026 50.3337C120.979 48.4062 119.525 46.9028 117.664 45.8234C115.802 44.7441 113.708 44.2044 111.382 44.2044C109.055 44.2044 106.961 44.7441 105.1 45.8234C103.277 46.9028 101.823 48.4062 100.737 50.3337C99.6903 52.2611 99.1667 54.4584 99.1667 56.9256C99.1667 59.3927 99.6903 61.59 100.737 63.5175C101.823 65.4449 103.277 66.9483 105.1 68.0277C106.961 69.1071 109.055 69.6468 111.382 69.6468Z" fill="white"/>
                    <path d="M179.638 72.68L179.594 52.0414L169.303 69.1216H166.708L156.417 52.3083V72.68H150.868V41.5442H155.656L168.095 62.1828L180.31 41.5442H185.097L185.142 72.68H179.638Z" fill="white"/>
                    <path d="M222.372 72.68L222.327 52.0414L212.036 69.1216H209.441L199.15 52.3083V72.68H193.602V41.5442H198.389L210.828 62.1828L223.043 41.5442H227.831L227.875 72.68H222.372Z" fill="white"/>
                    <path d="M235.799 48.9278H241.391V72.68H235.799V48.9278ZM238.617 45.0136C237.603 45.0136 236.753 44.7022 236.067 44.0795C235.381 43.4272 235.038 42.6265 235.038 41.6776C235.038 40.7287 235.381 39.9429 236.067 39.3202C236.753 38.6678 237.603 38.3416 238.617 38.3416C239.632 38.3416 240.482 38.653 241.168 39.2757C241.854 39.8688 242.197 40.6249 242.197 41.5442C242.197 42.5227 241.854 43.353 241.168 44.035C240.512 44.6874 239.661 45.0136 238.617 45.0136Z" fill="white"/>
                </svg>

            </a>                
        </div>

        <ul class="links">
           <li><a href="../index.php">Découvrir</a></li>
           <li><a href="./aide.html">Aide Rédaction</a></li>
           <li><a href="./FAQ.html">F.A.Q</a></li>
           <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>

    <section id="choixStage">

        <h1>Tous les stages</h1>
        <div class="legende">
            <div class="dom">
                <?php
                    $sql = "SELECT couleur
                    FROM domaines
                    WHERE Id = '1'";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();

                    echo '<div style="background-color : ';
                    echo $data['couleur'];
                    echo '"></div>';
                ?>
                <h2>Communication</h2>
            </div>
            <div class="dom">
                <?php
                    $sql = "SELECT couleur
                    FROM domaines
                    WHERE Id = '4'";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();

                    echo '<div style="background-color : ';
                    echo $data['couleur'];
                    echo '"></div>';
                ?>
                <h2>Graphisme</h2>
            </div>
            <div class="dom">
                <?php
                    $sql = "SELECT couleur
                    FROM domaines
                    WHERE Id = '2'";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();

                    echo '<div style="background-color : ';
                    echo $data['couleur'];
                    echo '"></div>';
                ?>
                <h2>Développement</h2>
            </div>
            <div class="dom">
                <?php
                    $sql = "SELECT couleur
                    FROM domaines
                    WHERE Id = '3'";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();

                    echo '<div style="background-color : ';
                    echo $data['couleur'];
                    echo '"></div>';
                ?>
                <h2>Audiovisuel</h2>
            </div>
        </div>
          
        <div class="stages">

            <?php

                $sql = "SELECT COUNT(Id_stage)
                FROM stage";
                $req = $link -> prepare($sql);
                $req -> execute();
                $dataTotal = $req -> fetch();


                for ($i=1; $i <= $dataTotal['COUNT(Id_stage)']; $i++) { 

                    echo '<div class="stageAll">';

                    $sql = "SELECT couleur
                    FROM stage AS s, domaines AS d
                    WHERE s.Id_stage = $i AND s.Id_domaine = d.Id";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo '<div class="colorFlag" style="background-color : ';
                    echo $data['couleur'];
                    echo '"></div>';
                    

                   echo '<div class="stage">
                   <h3 class="titre">
                       <span class="poste">';
                    
                    $sql = "SELECT poste
                    FROM stage
                    WHERE Id_stage = $i";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['poste'];

                    echo '</span> - MMI
                    <span class="anneeMMI">';

                    $sql = "SELECT anneeMMI
                    FROM stage
                    WHERE Id_stage = $i ";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['anneeMMI'];

                    echo '</span> - 
                    <span class="annee">';

                    $sql = "SELECT annee_stage
                    FROM stage
                    WHERE Id_stage = $i ";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['annee_stage'];

                    echo '</span>
                        </h3>
                        <div style="background-image:url(';

                    $sql = "SELECT logo 
                    FROM entreprises AS e, stage AS s
                    WHERE Id_stage = $i AND e.Id = s.Id_entreprise";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['logo'];

                    echo ');" class="logoEntreprise"></div>
                    <div class="etudiant">
                        <div class="icone">';

                        $sql = "SELECT sexe 
                        FROM etudiants AS e, stage AS s
                        WHERE Id_stage = $i AND e.prenom = s.Id_etudiant";
                        $req = $link -> prepare($sql);
                        $req -> execute();
                        $data = $req -> fetch();
                            if ($data['sexe'] === "0"){
                                echo '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">'
                                .'<circle cx="27.5" cy="27.5" r="27.5" fill="#58A4B0"/>'.
                                '<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1007 31.2155C16.2939 27.9208 14.3941 23.8831 14.7116 19.3588C15.6262 6.32295 33.7726 9.19067 37.3025 15.7701C40.8323 22.3494 40.4129 39.0386 35.8508 40.2145C34.0315 40.6835 30.1558 39.5347 26.2113 37.1571L29.0001 55L25.0001 54.8333L21.0001 54.1667L17.8334 53.1667L14.7117 51.8333L19.1007 31.2155Z" fill="#C9A07B"/>'.
                                '<path fill-rule="evenodd" clip-rule="evenodd" d="M26.942 20.7984C27.5016 28.5937 28.9819 32.4913 31.3829 32.4913C34.9847 32.4913 38.0405 30.2048 39.6208 30.2048C40.7728 30.2048 40.5156 31.6465 39.752 32.7153C39.122 33.5972 36.0539 34.4472 36.0539 35.8144C36.0539 37.1816 38.4779 36.1239 38.4779 36.9347C38.4779 38.2759 38.904 40.7977 36.5761 40.7977C34.2202 40.7977 27.4655 39.9392 26.308 36.4427C25.5609 34.1861 25.0779 29.5101 24.8589 22.4147C24.716 22.3977 24.5705 22.3889 24.423 22.3889C22.4045 22.3889 20.7682 24.0253 20.7682 26.0438C20.7682 27.0685 21.1899 27.9947 21.8692 28.6583C21.0236 29.852 20.0758 31.0989 18.9898 32.3856C14.9098 29.9378 11.8822 22.7721 15.871 15.8884C16.9736 12.5162 19.4696 10.7149 22.4174 9.87857C24.8052 8.87971 27.2841 8.76709 29.3766 9.3659C33.4785 9.71773 37.1413 10.9685 38.1793 11.7113C38.1793 15.5947 37.4269 16.7469 30.9998 16.6453C29.4206 17.4794 28.2065 18.9155 26.942 20.7984Z" fill="black"/>'.
                                '</svg>';
                            } else if ($data['sexe'] === "1"){
                                  echo '<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">'
                                  .'<circle cx="27.5" cy="27.5" r="27.5" fill="#58A4B0"/>'.
                                  '<path fill-rule="evenodd" clip-rule="evenodd" d="M21.9055 33.6985C19.3482 30.7889 17.6173 27.2231 17.9065 23.2275C18.7399 11.7153 35.2732 14.2478 38.4893 20.0582C41.7054 25.8686 41.3232 40.6072 37.1667 41.6457C35.5091 42.0599 31.9779 41.0454 28.384 38.9457L30.6398 54.4147L27.5 55L22.5 54.5L20.5 54L19 53.5L17.5 53L21.9055 33.6985Z" fill="#B28B67"/>'.
                                  '<path fill-rule="evenodd" clip-rule="evenodd" d="M44.39 12.0039C44.1142 11.0641 43.3723 10.2595 42.3725 10.0208C42.13 9.96289 41.8796 9.9395 41.6301 9.94925C41.5406 9.95271 41.5155 9.97773 41.4737 9.91707C41.4427 9.8721 41.442 9.76223 41.4292 9.70938C41.3895 9.54503 41.3398 9.38273 41.2785 9.22464C41.0693 8.68543 40.7177 8.20822 40.2939 7.80622C39.5012 7.05416 38.4301 6.53513 37.3172 6.44122C36.7082 6.38986 36.1036 6.48577 35.5278 6.67782C35.2297 6.77723 34.9406 6.90102 34.6591 7.03788C34.5743 7.07907 34.2993 7.28083 34.2142 7.26776C34.1202 7.25334 33.9314 7.02703 33.855 6.97022C32.9108 6.26801 31.7447 5.99192 30.5686 6.00018C29.241 6.00987 27.9627 6.07417 26.8555 6.85859C26.6211 7.02466 26.3979 7.2065 26.1854 7.39794C26.0735 7.49873 25.9651 7.6033 25.8617 7.71222C25.7993 7.77793 25.7385 7.84512 25.6801 7.91412C25.5809 8.03123 25.5968 8.0697 25.4579 7.98799C24.925 7.6742 24.3076 7.52745 23.6856 7.60153C23.3163 7.64555 22.957 7.75302 22.6158 7.89447C22.4997 7.94263 22.2308 8.1347 22.107 8.13658C21.9842 8.13841 21.7191 7.96036 21.5926 7.9151C20.9092 7.6706 20.1727 7.61033 19.4545 7.72331C18.7136 7.83989 17.9858 8.1264 17.3581 8.52232C17.0562 8.71277 16.7928 8.92379 16.5812 9.20698C16.4898 9.32925 16.4073 9.45858 16.3037 9.57195C16.2431 9.63833 16.123 9.70644 16.0905 9.79045C16.11 9.74015 15.2803 9.43011 15.202 9.41029C14.7849 9.30469 14.3601 9.3261 13.9517 9.45639C13.1836 9.70139 12.5231 10.2508 11.9802 10.8141C11.7014 11.1035 11.4574 11.4233 11.2503 11.764C11.151 11.9272 11.0602 12.0951 10.9772 12.2666C10.9369 12.3496 10.9103 12.4535 10.8572 12.5283C10.7889 12.6247 10.743 12.6266 10.6192 12.6686C9.99062 12.8821 9.4176 13.2434 8.98124 13.7316C8.53986 14.2255 8.25346 14.8337 8.13338 15.4743C8.12632 15.512 8.12211 15.6683 8.09932 15.6888C8.06807 15.7169 7.94167 15.7045 7.89385 15.7099C7.72826 15.7287 7.56384 15.7567 7.40161 15.794C7.10255 15.8626 6.81147 15.9635 6.53612 16.0956C5.46274 16.6104 4.69516 17.5754 4.31948 18.6613C3.9253 19.8009 3.93229 21.1066 4.40341 22.2249C4.47951 22.4055 4.57007 22.5809 4.67642 22.7467C4.74173 22.8485 4.7628 22.8488 4.7204 22.9556C4.67313 23.0745 4.58679 23.1899 4.53066 23.3061C4.34755 23.685 4.21953 24.087 4.13867 24.4975C4.00601 25.1709 3.94026 25.8785 4.07113 26.557C4.1319 26.8721 4.23779 27.1801 4.39932 27.4607C4.48167 27.6037 4.57804 27.7394 4.68685 27.865C4.74334 27.9301 4.80334 27.9924 4.86609 28.052C4.90198 28.0861 4.94903 28.1159 4.97954 28.1539C5.05403 28.2467 5.06969 28.1704 5.03128 28.3067C4.97757 28.4971 4.85581 28.685 4.78124 28.8704C4.70441 29.0613 4.63497 29.2549 4.57146 29.4504C4.44282 29.8463 4.33405 30.2494 4.26603 30.6594C4.13542 31.4465 4.15836 32.2852 4.54248 33.0076C4.70672 33.3167 4.94233 33.5877 5.22811 33.7986C5.36798 33.9018 5.51949 33.9907 5.67842 34.0637C5.76008 34.1013 5.86435 34.1174 5.9016 34.194C5.9417 34.2763 5.88217 34.4397 5.8686 34.5318C5.7505 35.3324 5.69126 36.173 5.93679 36.9575C6.16294 37.6802 6.66084 38.3182 7.30729 38.7406C8.56137 39.56 10.2518 39.5138 11.5695 38.8578C11.913 38.6868 12.2343 38.4745 12.521 38.224C13.2509 39.1765 14.753 39.1463 15.8198 38.8749C17.1489 38.5369 18.2154 37.641 18.8299 36.4641C19.6701 37.4555 21.4334 37.1338 22.0161 36.0583C22.1587 35.7951 22.2433 35.5049 22.2849 35.2114C22.3068 35.057 22.2929 34.9013 22.3093 34.7481C22.3303 34.553 22.4648 34.3633 22.5421 34.1745C22.6927 33.8071 22.7862 33.4276 22.7902 33.0313C22.7923 32.8244 22.7652 32.6227 22.7449 32.4175C22.7267 32.2327 22.7795 32.0605 22.8096 31.8782C22.4687 31.9326 22.0534 31.8435 21.7322 31.7477C21.4171 31.6537 21.1219 31.4061 20.8995 31.1799C20.383 30.6548 20.0674 29.9664 19.8517 29.2813C19.378 27.7776 19.5721 25.9735 21.1325 25.1483C21.8594 24.7638 24.0371 24.7651 24.9029 24.9551C25.8132 25.1549 26.8452 27.1018 26.896 27.2848C26.9274 27.3981 26.9116 27.5383 27.019 27.6137C27.2549 27.7797 27.6439 27.4917 27.8179 27.3496C28.1182 27.1043 28.3324 26.778 28.5179 26.4471C28.9221 25.7265 29.2479 24.9536 29.4781 24.1646C29.6555 23.5563 29.769 22.9291 30.0009 22.3363C30.2317 21.7465 30.5955 21.2193 31.1612 20.8852C31.7765 20.5217 32.4819 20.3302 33.1574 20.1018C33.827 19.8754 34.485 19.5987 35.0041 19.1184C35.1182 19.0127 35.2291 18.9005 35.3209 18.7761C35.3935 18.678 35.4651 18.49 35.5756 18.4278C35.7474 18.3309 35.9981 18.5828 36.1466 18.6742C36.8795 19.1253 37.4908 19.7545 37.984 20.4419C38.4743 21.1255 38.8767 21.7832 39.2037 22.5466C39.4462 23.1127 39.5976 23.8377 40.0241 24.3017C40.2146 24.5088 41.6301 24.6342 42.0886 24.4533C42.5471 24.2724 43.061 23.8028 43.2149 23.5085C43.3724 23.2073 43.41 22.8763 43.3427 22.5466C43.3031 22.3525 43.2223 22.1713 43.1781 21.9807C43.1408 21.8207 43.107 21.6694 43.0266 21.5227C42.8743 21.2448 42.614 21.0451 42.3001 20.9616C42.6268 20.6697 42.8974 20.3204 43.0847 19.9301C43.2793 19.5245 43.4443 19.0313 43.491 18.5862C43.5291 18.2246 43.4704 17.85 43.2662 17.5393C43.052 17.2134 42.6725 17.0007 42.3442 16.7974C42.8457 16.4171 43.2749 15.9545 43.6278 15.4424C44.3141 14.4465 44.7385 13.1912 44.39 12.0039Z" fill="#111111"/>'.
                                  '</svg>';
                            };

                    echo '</div>
                    <p class="nomEtudiant">';

                    $sql = "SELECT prenom, nom 
                    FROM etudiants AS e, stage AS s
                    WHERE Id_stage = $i AND e.prenom = s.Id_etudiant";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo ''.$data['prenom'].' '.$data['nom'].'';

                    echo '</p>
                    </div>
    
                    <p class="descriptionMission">';

                    $sql = "SELECT description 
                    FROM stage
                    WHERE Id_stage = $i ";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['description'];

                    echo '</p>

                    <p class="entreprise">
                        Chez <a target="_blank" href="';
                    
                    $sql = "SELECT site_web
                    FROM entreprises AS e, stage AS s
                    WHERE Id_stage = $i AND e.Id = s.Id_entreprise";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['site_web'];

                    echo '">';

                    $sql = "SELECT nom
                    FROM entreprises AS e, stage AS s
                    WHERE Id_stage = $i AND e.Id = s.Id_entreprise";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['nom'];

                    echo '</a>
                    </p>
    
                    <svg class="like" width="50px" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M26.002,13H20V7.026C20,5.907,19.093,5,17.974,5c-0.615,0-1.198,0.28-1.582,0.76L9,15l0.001,0L9,15v10l3,2h12.473  c0.892,0,1.676-0.592,1.921-1.451l2.49-8.725C29.43,14.908,27.993,13,26.002,13z" fill="none" id="XMLID_5_" stroke="#28A95C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><rect fill="none" height="14" id="XMLID_3_" stroke="#28A95C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" width="6" x="3" y="13"/><circle cx="6" cy="23" id="XMLID_4_" r="1" fill="#28A95C"/></svg>
                    
                    
                    <p class="avisPositif">';

                    $sql = "SELECT positif 
                    FROM stage
                    WHERE Id_stage = $i ";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['positif'];

                    echo '</p>
                
                    <svg class="dislike" width="50px" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="  M5.998,19H12v5.974C12,26.093,12.907,27,14.026,27c0.615,0,1.198-0.28,1.582-0.76L23,17l-0.001,0L23,17V7l-3-2H7.527  C6.636,5,5.852,5.592,5.607,6.451l-2.49,8.725C2.57,17.092,4.007,19,5.998,19z" fill="none" id="XMLID_21_" stroke="#EA1A1A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><rect fill="none" height="14" id="XMLID_20_" stroke="#EA1A1A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" transform="matrix(-1 -8.988867e-11 8.988867e-11 -1 52 24)" width="6" x="23" y="5"/><circle cx="26" cy="9" id="XMLID_19_" r="1" fill="#EA1A1A"/></svg>
    
                    <p class="avisNegatif">';

                    $sql = "SELECT negatif
                    FROM stage
                    WHERE Id_stage = $i ";
                    $req = $link -> prepare($sql);
                    $req -> execute();
                    $data = $req -> fetch();
                    echo $data['negatif'];

                    echo '</p>

                    <span class="stars">';

                    $sql = "SELECT note
                        FROM stage
                        WHERE Id_stage = $i ";
                        $req = $link -> prepare($sql);
                        $req -> execute();
                        $data = $req -> fetch();
                            echo '<svg class="stars" width="120" height="43" viewBox="0 0 188 43" fill="none" xmlns="http:/www.w3org/2000/svg">';
                            if ($data['note'] === "0"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>';

                            } else if ($data['note'] === "1"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>';
                                  
                            }else if ($data['note'] === "2"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>';
                                  
                            }else if ($data['note'] === "3"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>';

                            }else if ($data['note'] === "4"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="none" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>';
                                  
                            }else if ($data['note'] === "5"){
                                echo '<path class="star5" d="M168.271 0L172.484 14.5971H186.119L175.088 23.6187L179.301 38.2158L168.271 29.1943L157.24 38.2158L161.454 23.6187L150.423 14.5971H164.058L168.271 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star4" d="M130.738 0L134.952 14.5971H148.586L137.556 23.6187L141.769 38.2158L130.738 29.1943L119.708 38.2158L123.921 23.6187L112.891 14.5971H126.525L130.738 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star3" d="M93.5186 0L97.6616 14.5971H111.069L100.222 23.6187L104.365 38.2158L93.5186 29.1943L82.6719 38.2158L86.8149 23.6187L75.9682 14.5971H89.3755L93.5186 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star2" d="M56.2989 0L60.5122 14.5971H74.1467L63.1161 23.6187L67.3294 38.2158L56.2989 29.1943L45.2683 38.2158L49.4816 23.6187L38.4511 14.5971H52.0856L56.2989 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>
                                <path class="star1" d="M18.7663 0L22.9796 14.5971H36.6141L25.5835 23.6187L29.7968 38.2158L18.7663 29.1943L7.73574 38.2158L11.949 23.6187L0.918488 14.5971H14.553L18.7663 0Z" fill="#EF8275" stroke="#EF8275" stroke-width="2"/>';
                                  
                            }
                            echo '</svg>';
                        echo '</span>

                        <svg class="btnDefil" width="50" height="102" viewBox="0 0 97 102" fill="none" xmlns="http:/wwww3.org/2000/svg">
                                   <ellipse rx="48.3571" ry="49.101" transform="matrix(-1 0 0 1 48.5455 52.0769)" fill="#EF8275"/>
                                   <path d="M27.0095 37.0862C26.7283 36.9368 26.5221 36.9334 26.3694 36.9627C26.1907 36.9971 25.9912 37.0985 25.821 37.2748C25.6507 37.4512 25.5565 37.6542 25.5284 37.834C25.5045 37.9876 25.5152 38.1936 25.6744 38.4693L47.4553 76.1949C47.8402 76.8616 48.8025 76.8616 49.1874 76.1949L70.9682 38.4694C71.1274 38.1936 71.1382 37.9876 71.1142 37.834C71.0862 37.6542 70.9919 37.4512 70.8217 37.2748C70.6515 37.0985 70.452 36.9971 70.2732 36.9627C70.1206 36.9334 69.9143 36.9368 69.6331 37.0862L51.605 46.6621C49.5517 47.7527 47.0909 47.7527 45.0377 46.6621L27.0095 37.0862Z" stroke="white" fill="white" stroke-width="6"/>
                        </svg>
                    </div>';
                    echo '</div>';
                };   
                 
            ?>
            
        </div>

    </section>

    <footer>
        <div class="logoIndex">
            <a href="./index.html">
                <svg width="125" height="90" viewBox="0 0 250 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M133.443 103.727C132.817 101.948 132.503 99.5012 132.503 96.3876V89.8491H140.96V95.4535C140.96 99.2788 141.452 101.725 142.437 102.793C142.884 103.237 143.51 103.504 144.316 103.593C145.121 103.771 146.15 103.86 147.403 103.86H152.772V112H148.477C145.345 112 142.839 111.689 140.96 111.066C139.081 110.443 137.515 109.554 136.262 108.397C134.92 107.063 133.98 105.506 133.443 103.727Z" fill="white"/>
                    <path d="M140.96 23.1296V16.7245C140.96 12.8992 141.452 10.4973 142.437 9.51875C143.063 8.89603 143.868 8.54019 144.853 8.45123C145.837 8.36227 147.269 8.31779 149.148 8.31779H152.772V0.178008H148.477C145.345 0.178008 142.839 0.489365 140.96 1.11208C139.081 1.64583 137.515 2.53543 136.262 3.78086C134.92 5.02629 133.98 6.5386 133.443 8.31779C132.817 10.097 132.503 12.5434 132.503 15.6569V23.1296H140.96Z" fill="white"/>
                    <path d="M249.06 103.549C249.687 101.77 250 99.3232 250 96.2096V89.8492H241.543V95.2755C241.543 99.1008 241.051 101.547 240.067 102.615C239.619 103.059 238.993 103.326 238.188 103.415C237.382 103.593 236.353 103.682 235.1 103.682H229.731V111.822H234.027C237.159 111.822 239.664 111.511 241.543 110.888C243.423 110.265 244.989 109.376 246.242 108.219C247.584 106.885 248.523 105.328 249.06 103.549Z" fill="white"/>
                    <path d="M241.543 23.1297H250V15.4789C250 12.3654 249.687 9.91897 249.06 8.13978C248.523 6.36059 247.584 4.84828 246.242 3.60285C244.989 2.35742 243.423 1.46782 241.543 0.93407C239.664 0.311356 237.159 0 234.027 0H229.731V8.13978H233.355C235.235 8.13978 236.666 8.18426 237.651 8.27322C238.635 8.36218 239.441 8.71802 240.067 9.34074C241.051 10.3193 241.543 12.7212 241.543 16.5464V23.1297Z" fill="white"/>
                    <path d="M33.155 37.541V78.0175H30.1885V58.7623H2.9665V78.0175H0V37.541H2.9665V56.1602H30.1885V37.541H33.155Z" fill="white"/>
                    <path d="M72.0948 63.6195H45.978C46.0555 65.971 46.6566 68.0719 47.7811 69.9222C48.9057 71.734 50.418 73.1411 52.3181 74.1434C54.257 75.1456 56.4286 75.6468 58.8328 75.6468C60.8104 75.6468 62.633 75.2998 64.3004 74.6059C66.0067 73.8735 67.422 72.8134 68.5466 71.4256L70.2334 73.3338C68.915 74.9143 67.2475 76.1286 65.2311 76.9767C63.2534 77.8248 61.1013 78.2488 58.7746 78.2488C55.7499 78.2488 53.0549 77.5935 50.6894 76.2828C48.324 74.9722 46.4627 73.1604 45.1055 70.8474C43.787 68.5345 43.1278 65.8939 43.1278 62.9256C43.1278 59.9958 43.7482 57.3745 44.9891 55.0616C46.2688 52.7101 48.0138 50.879 50.2241 49.5683C52.4345 48.2576 54.9162 47.6023 57.6694 47.6023C60.4227 47.6023 62.885 48.2576 65.0566 49.5683C67.2669 50.8404 68.9925 52.633 70.2334 54.9459C71.5131 57.2589 72.1529 59.8802 72.1529 62.8099L72.0948 63.6195ZM57.6694 50.1466C55.5367 50.1466 53.6172 50.6284 51.9109 51.5921C50.2047 52.5173 48.8281 53.8473 47.7811 55.582C46.7729 57.2781 46.1912 59.2056 46.0361 61.3643H69.3028C69.1864 59.2056 68.6048 57.2781 67.5578 55.582C66.5108 53.8858 65.1342 52.5559 63.4279 51.5921C61.7217 50.6284 59.8022 50.1466 57.6694 50.1466Z" fill="white"/>
                    <path d="M81.1501 35.1124H84.0584V78.0175H81.1501V35.1124Z" fill="white"/>
                    <path d="M111.556 47.6023C114.387 47.6023 116.946 48.2576 119.234 49.5683C121.522 50.879 123.306 52.6908 124.586 55.0037C125.904 57.3167 126.563 59.9573 126.563 62.9256C126.563 65.8939 125.904 68.5537 124.586 70.9052C123.306 73.2182 121.522 75.03 119.234 76.3407C116.946 77.6128 114.387 78.2488 111.556 78.2488C108.881 78.2488 106.457 77.632 104.285 76.3985C102.114 75.1264 100.427 73.3724 99.2249 71.1365V89.2353H96.3166V47.8336H99.1086V54.9459C100.311 52.633 101.998 50.8404 104.169 49.5683C106.379 48.2576 108.842 47.6023 111.556 47.6023ZM111.382 75.6468C113.708 75.6468 115.802 75.1071 117.664 74.0277C119.525 72.9483 120.979 71.4449 122.026 69.5175C123.112 67.59 123.655 65.3927 123.655 62.9256C123.655 60.4584 123.112 58.2611 122.026 56.3337C120.979 54.4062 119.525 52.9028 117.664 51.8234C115.802 50.7441 113.708 50.2044 111.382 50.2044C109.055 50.2044 106.961 50.7441 105.1 51.8234C103.277 52.9028 101.823 54.4062 100.737 56.3337C99.6903 58.2611 99.1667 60.4584 99.1667 62.9256C99.1667 65.3927 99.6903 67.59 100.737 69.5175C101.823 71.4449 103.277 72.9483 105.1 74.0277C106.961 75.1071 109.055 75.6468 111.382 75.6468Z" fill="white"/>
                    <path d="M172.638 72.68L172.594 52.0414L162.303 69.1216H159.708L149.417 52.3083V72.68H143.868V41.5442H148.656L161.095 62.1828L173.31 41.5442H178.097L178.142 72.68H172.638Z" fill="white"/>
                    <path d="M215.372 72.68L215.327 52.0414L205.036 69.1216H202.441L192.15 52.3083V72.68H186.602V41.5442H191.389L203.828 62.1828L216.043 41.5442H220.831L220.875 72.68H215.372Z" fill="white"/>
                    <path d="M228.799 48.9278H234.391V72.68H228.799V48.9278ZM231.617 45.0136C230.603 45.0136 229.753 44.7022 229.067 44.0795C228.381 43.4272 228.038 42.6265 228.038 41.6776C228.038 40.7287 228.381 39.9429 229.067 39.3202C229.753 38.6678 230.603 38.3416 231.617 38.3416C232.632 38.3416 233.482 38.653 234.168 39.2757C234.854 39.8688 235.197 40.6249 235.197 41.5442C235.197 42.5227 234.854 43.353 234.168 44.035C233.512 44.6874 232.661 45.0136 231.617 45.0136Z" fill="white"/>
                </svg>
            </a>                
        </div>

        <ul class="links">
            <li><a href="#choixDomaine">Découvrir</a></li>
            <li><a href="#">Aide CV</a></li>
            <li><a href="#">F.A.Q</a></li>
            <li><a href="#">Contact</a></li>
         </ul>

         <p>©Tous droits réservés, HelpMMI 2021</p>
    </footer>
    <script src="../assets/stages.js"></script>
</body>

</html>