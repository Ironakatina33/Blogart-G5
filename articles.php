<?php require_once 'header.php';
sql_connect();
?>

<?php
                require_once('./config.php');
                $numArt = $_GET['numArt'];

                
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];
$libChapoArt = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];
$libAccrochArt = sql_select("ARTICLE", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];
$parag1Art = sql_select("ARTICLE", "parag1Art", "numArt = $numArt")[0]['parag1Art'];
$libSsTitr1Art = sql_select("ARTICLE", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];
$parag2Art = sql_select("ARTICLE", "parag2Art", "numArt = $numArt")[0]['parag2Art'];
$libSsTitr2Art = sql_select("ARTICLE", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];
$parag3Art = sql_select("ARTICLE", "parag3Art", "numArt = $numArt")[0]['parag3Art'];
$libConclArt = sql_select("ARTICLE", "libConclArt", "numArt = $numArt")[0]['libConclArt'];
$urlPhotArt = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];
$numThem = sql_select("ARTICLE", "numThem", "numArt = $numArt")[0]['numThem'];


            ?>

<!--   Titre   -->
<div class="rubri-event">
    <br>
        <h1 style="background-color:white ; width :fit-content; margin:auto; padding:10px; font-size:64px" class=" text-center"><?php echo($libTitrArt) ?> </h1>
    <br>
    <br>
    <br>


<!--   Chapo   -->
    <div class="container text-center" style="background-color:white">
        <br>
        <div class="row ">
            <div class="col" >
                <h2 style="font-size:20px; font-family: 'Poppins', sans-serif"><?php echo($libChapoArt) ?></h2>
                <br>
            </div>
            <br>
            <br>
        </div>
    </div>
    <br>
    
<!--   URL  -->
    <div class="container text-center">
        <div class="row ">
            <div class="col">
                <br>
                <img src="<?php echo($urlPhotArt) ?>" class="img-fluid" alt="Chateau">
                <br>
            </div>
        </div>
    </div>
</div>
<br>

<!--   accroche 1 -->
    <div class="container text-center" style="background-color:white">
        <div class="row ">
            <div class="col">
                <br>
                    <h3 style="font-size:50px; font-family: 'Poppins', sans-serif"><?php echo($libAccrochArt) ?></h3>
                <br>
            </div>
        </div>
    </div>
</div>
<br>

<!--   Paragraphe 1  -->
<div class="container text-center" style="background-color:white">
    <br>
    <div class="row ">
        <div class="col">
            <h3 style="font-size:20px; font-family: 'Poppins', sans-serif"><?php echo($parag1Art) ?></h3>
        <br>
        </div>
        <br>
        <br>
    </div>
</div>
<br>

<!--   Sous-titre  -->
<div class="container text-center" style="background-color:white">
    <div class="row ">
        <div class="col">
            <br>
            <h2 style="font-size:50px; font-family: 'Poppins', sans-serif"><?php echo($libSsTitr1Art) ?><h2>
            <br>
        </div>
    </div>
</div>
<br>

<!--   Paragraphe 2  -->
<div class="container text-center" style="background-color:white">
    <br>
    <div class="row ">
        <div class="col">
            <h3 style="font-size:20px; font-family: 'Poppins', sans-serif"><?php echo($parag2Art) ?></h3>
        <br>
        </div>
        <br>
        <br>
    </div>
</div>
<br>

<!--   Sous-titre 2  -->
<div class="container text-center" style="background-color:white">
    <div class="row ">
        <div class="col">
            <br>
            <h2 style="font-size:50px; font-family: 'Poppins', sans-serif"><?php echo($libSsTitr2Art) ?><h2>
            <br>
        </div>
    </div>
</div>
<br>

<!--   Paragraphe 3  -->
<div class="container text-center" style="background-color:white">
    <br>
    <div class="row ">
        <div class="col">
            <h3 style="font-size:20px; font-family: 'Poppins', sans-serif"><?php echo($parag3Art) ?></h3>
        <br>
        </div>
        <br>
        <br>
    </div>
</div>
<br>

<!--   Conclusion  -->
<div class="container text-center" style="background-color:white">
    <br>
    <div class="row ">
        <div class="col">
            <h3 style="font-size:20px; font-family: 'Poppins', sans-serif"><?php echo($libConclArt) ?></h3>
            <br>
        </div>
        <br>
        <br>
    </div>
</div>
<br>



<?php require_once 'footer.php'; ?>