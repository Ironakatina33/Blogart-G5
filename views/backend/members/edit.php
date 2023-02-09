<?php
include '../../../header.php';

$numMemb = $_GET['numMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];

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
                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?> ">
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>