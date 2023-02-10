<?php
include '../../../header.php';

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
<style> 
h1{
    color:white;
}
label{
    color:white;
}</style>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="numArt" class="form-control" type="text" name="numArt" value="<?php echo($numArt) ?> ">
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>" >
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt" value="<?php echo($libChapoArt) ?>" >
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo($libAccrochArt) ?>" >
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art" value="<?php echo($parag1Art) ?>" >
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo($libSsTitr1Art) ?>" >
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art" value="<?php echo($parag2Art) ?>" >
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo($libSsTitr2Art) ?>" >
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art" value="<?php echo($parag3Art) ?>" >
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt" value="<?php echo($libConclArt) ?>" >
                    <input id="numThem" class="form-control" type="text" name="numThem" value="<?php echo($numThem) ?>" >

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>