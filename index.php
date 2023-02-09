<?php require_once 'header.php';
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<div class="container-fluid p-0">
    <a class="img-chateau" href="#" style="display:inline-block; width:100%"><img src="src\images\chateau.png" alt="BlogArt" style="width:100%"></a>
</div>

<div class="container text-center">
    <div class="rubri-dartic">
        <br>
        <h1 style="background-color:white ; width : 400px; margin:auto"> Derniers Articles </h1>
        <br>
            <?php
                require_once('./config.php');
                $ARTICLE = sql_select('ARTICLE', '*');
                foreach ($ARTICLE as $ARTICLES) {
            ?>

            <div class="container text-center" style="background-color:white">
                <br>
                <div class="row">
                    <div class="col">
                        <img src="<?php echo ($ARTICLES["urlPhotArt"]) ?>" class="img-fluid" alt="Chateau"></a>
                    </div>
                    <div class="col">
                        <?php 
                            echo ("<h1>" . $ARTICLES["libTitrArt"]); 
                        ?>
                        <br>
                        <br>
                        <p>Découvrez l'article</p>
                        <br>
                        <br>
                        <a style="background-color:orange; display:block; float:right" href="articles.php?numArt=<?php echo $ARTICLES['numArt']; ?>" class="btn btn-primary justify-content-md-end">Edit</a>
                    </div>
                </div>
                <br>
                <br>
                    <?php 
                        } 
                    ?>
            </div>
    </div>
</div>
</div>
</div>
<br>


<br>



<div class="rubri-event">
    <br>
    <h1 style="background-color:white ; width : 400px; margin:auto"> Evenements </h1>
    <br>

    <div class="container text-center" style="background-color:white">
        <br>
        <div class="row">
            <div class="col">
                <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
            </div>
            <div class="col">
                Festival médiéval Landiras
                <br>
                <br>
                Chevaliers, défendez Landiras !
                <br>
                <br>
                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
            </div>
        </div>


        <br>
    </div>
    <br>
    <br>

</div>
</div>
</div>
</div>
</div>

<div class="rubri-event container">
    <br>
    <h1 class=" text-center" style="background-color:white ; width : 400px; margin:auto"> Interviews </h1>
    <br>

    <div style="background-color:white">
        <br>






        <div class="container row">
            <div class="col">
                <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
            </div>
            <div class="col">
                L'interview
                <br>
                <br>
                Découvrez l'interview
                <br>
                <br>
                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
            </div>
        </div>


        <br>
    </div>
        <br>
        <br>      
    </div>
    </div> 
    <?php require_once 'footer.php'; ?>