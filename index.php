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
        <h1 style="background-color:white ; width : 400px; margin:auto; font-family: 'Poppins', sans-serif"> Derniers Articles </h1>
        <br>
            <?php
                require_once('./config.php');
                $ARTICLE = sql_select('ARTICLE', '*');
                foreach ($ARTICLE as $ARTICLES) {
            ?>

            <div class="container text-center" style="background-color:white;">
                <br>
                <div class="row">
                    <div class="col">
                        <img src="<?php echo (ROOT_URL . $ARTICLES["urlPhotArt"]) ?>" class="img-fluid" alt="Chateau"></a>
                    </div>
                    <div class="col">
                        <?php 
                            echo ("<h1>" . $ARTICLES["libTitrArt"]); 
                        ?>
                        <br>
                        <br>
                        <div style="font-family: 'Poppins', sans-serif">
                        <p>Découvrez l'article</p>
                        </div>
                        <br>
                        <br>
                        <a style="background-color:#FF4D00; display:block; float:right;   width  : 200px;
  height : 50px; font-family: 'Poppins', bold; color:#FFFFFF" href="articles.php?numArt=<?php echo $ARTICLES['numArt']; ?>" class="btn btn-primary justify-content-md-end; container text-center">En savoir plus ></a> 
                        <br>

                    </div>

                    </div>
                </div>

                    <?php 
                        } 
                    ?>
  
                


<div style="background-color:#840331"><br></div>




<br>
<div class="rubri-event">
    <br>
    <h1 style="background-color:white ; width : 400px; margin:auto"> Evenements </h1>
    <br>

    <div class="container text-center" style="background-color:white; ">
        <br>
        <div class="row">
            <div class="col">
                <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
            </div>
            <div class="col">
                <div style="font-family: 'Poppins', sans-serif">Festival médiéval Landiras</div>
                <br>
                <br>
                <div style="font-family: 'Poppins', sans-serif">Chevaliers, défendez Landiras !</div>
                <br>
                <br>
                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:#FF4D00; display:block; float:right;   width  : 200px;
  height : 50px; font-family: 'Poppins', bold; color:#FFFFFF">En savoir plus ></button>
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
                <div style="font-family: 'Poppins', sans-serif">L'interview</div>
                <br>
                <br>
                <div style="font-family: 'Poppins', sans-serif">Découvrez l'interview</div>
                <br>
                <br>
                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:#FF4D00; display:block; float:right;   width  : 200px;
  height : 50px; font-family: 'Poppins', bold; color:#FFFFFF">En savoir plus ></button>
            </div>
        </div>


        <br>
    </div>
        <br>
        <br>      
    </div>
    </div> 
    <?php require_once 'footer.php'; ?>