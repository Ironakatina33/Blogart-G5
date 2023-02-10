<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

sql_connect(); 

$MEMBRE = sql_select('MEMBRE', '*');?>
<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Se connecter</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/users/verify.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" required>

                    <label for="passMemb">passMemb</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb" required>
</div>
                <div class="form-group mt-2">
                <a style="background-color:#FF4D00; display:block; float:right;   width  : 200px;
  height : 50px; font-family: 'Poppins', bold; color:#FFFFFF" href="articles.php?pseudoMemb=<?php echo $MEMBRE['pseudoMemb']; ?>" class="btn btn-primary justify-content-md-end; container text-center">Connexion</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>