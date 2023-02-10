<?php
include '../../../header.php';

$numMemb = $_GET['numMemb'];
$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];
?>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/users/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">prenomMemb</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>" >

                    <label for="nomMemb">nomMemb</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb) ?>" >

                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>" >

                    <label for="passMemb">passMemb</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb" value="<?php echo($passMemb) ?>" >

                    <label for="eMailMemb">eMailMemb</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" value="<?php echo($eMailMemb) ?>" >

                    <label for="numStat">numStat</label>
                    <input id="numStat" class="form-control" type="text" name="numStat" value="<?php echo($numStat) ?>" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>