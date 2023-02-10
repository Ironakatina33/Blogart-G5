<?php
include '../../../header.php';

$numStat = $_GET['numStat'];
$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];

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
            <form action="<?php echo ROOT_URL . '/api/status/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">libStat</label>
                    <input id="numStat" class="form-control" type="text" name="numStat" value="<?php echo($numStat) ?> ">
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo($libStat) ?>" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>