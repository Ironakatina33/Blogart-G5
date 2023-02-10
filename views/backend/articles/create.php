<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype='multipart/form-data' >
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" required>

                    <label for="libChapoArt">libChapoArt</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">

                    <label for="libAccrochArt">libAccrochArt</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">

                    <label for="parag1Art">parag1Art</label>
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art">

                    <label for="libSsTitr1Art">libSsTitr1Art</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">

                    <label for="parag2Art">parag2Art</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art">

                    <label for="libSsTitr2Art">libSsTitr2Art</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">

                    <label for="parag3Art">parag3Art</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art">

                    <label for="libConclArt">libConclArt</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">

                    <label for="urlPhotArt">image</label>
                    <input class="form-control" type="file" name="file" id="file">

                    <label for="numThem">numThem</label>
                    <input id="numThem" class="form-control" type="text" name="numThem" required>



                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>