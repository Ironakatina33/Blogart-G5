<?php require_once 'header.php';
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<div div class="container text-center">
    <a class="img-chateau" href="#"><img src="src\images\chateau.png" alt="BlogArt"></a>

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
                        <a class="bababoi" href="#"> <img src="<?php $ARTICLES["urlPhotArt"] ?>" class="img-fluid" alt="Chateau"></a>
                    </div>
                    <div class="col">
                        <?php echo ("<h1>" . $ARTICLES["libTitrArt"]); ?>
                        <br>
                        <br>
                        Découvrez l'article
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                    </div>
                </div>
                <br>
                <br>
            <?php } ?>




        </div>
        </div>
        </div>
        </div>
        </div>
<br>

<img src="https://medias.lumni.fr/9MM8NhDmp_mHVG5LerGs3kbdhbE/714x348/filters:focal(308x288:307x287):quality(80):max_bytes(120000)/6352b620817c2c9fdf05c5b9"/>

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


                <!--
        <div class="container text-center p-3 mb-2 bg-white text-dark">
            <div class="row align-items-start">
                <div class="col">
                    <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
                    <br>
                    <br>
                    <a class="bababoi" href="#"><img src="src\images\bababoi.png" class="img-fluid" alt="BlogArt"></a>
                </div>

                <div class="col">
                    Article 1
                    <br>
                    <br>
                    Chevaliers, défendez Landiras !
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                    </div>
                    <div>
                    Article 2
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                    <br>
                    <br>
                 </div>
                </div>
      -->
                <!--
            <div>
            <div class="container text-center p-3 mb-2 bg-white text-dark">
            <div class="row align-items-start">
                <div class="col"> 
                    <div> 
                        <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
                    </div>
                    <br>
                    <br>
                    <div>
                    <a class="bababoi" href="#"> <img src="src\images\bababoi.png" class="img-fluid" alt="Chateau"></a>
                    </div>
                </div>

                <div class="col"> 
                    ARTICLE 1
                    <div>
                        Chevaliers défendez Landiras !
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                    <br>
                    <br>
                    <div> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                    <br>
                    <br>
                </div>
            </div>
            </div>
            </div>
                
-->
                <!--
                <div class="container text-center" style="color:black">
                    <div class="row align-items-start">
                        <br>
                        <div class="col">
                            Article 2
                            <br>
                            dcdshuvbuhsvffcfbvhdbvhfdbvhfdbvhkucbvfbduhvbfdhkvbkfvbkfdjvhdvbfdbvfdvhjfvkjhfdvkfvjfvkjdfkvjbfdvjbdf
                            <br>

                            <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                            <a class="bababoi" href="#"><img src="src\images\bababoi.png" class="img-fluid" alt="BlogArt"></a>
                        </div>
    
                        <div class="rubri-deve">
                            <h1 style="background-color:white; width : 400px; margin:auto"> évènements </h1>
                            <a class="bababoi" href="#"><img src="src\images\bababoi.png" class="img-fluid" alt="BlogArt"></a>
                            <div style="background-color:white; width:1300px">
                                <h2 style="text-align:end; margin-right:100px"> Forteresse de Blanquefort </h2>
                                <p style="text-align:end; margin-right:100px">Lorem Ipsum fvhefvbfbvbfdivfdlivfdinvifvijfdivfvfdjvnfdjnvfdinvifdnvjfdv</p>
                                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                                <br>
                                <br>
                            </div>
                            <br>
                        </div>

                        <div class="rubri-dinter">
                            <h1 style="background-color:white ; width : 400px; margin:auto"> interviews </h1>
                            <a class="bababoi" href="#"><img src="src\images\bababoi.png" class="img-fluid" alt="BlogArt"></a>
                            <div style="background-color:white; width:1300px">
                                <h2 style="text-align:end; margin-right:100px"> L'interview</h2>
                                <p style="text-align:end; margin-right:100px">Lorem Ipsum fcefuhviefiefifvfiferuhfiuhiuhiuifjziefuhrzfsfqfezifiezfijdsfodjofijezifjdsfà</p>
                                <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
                                <br>
                                <br>
                            </div>
                            <br>
                        </div>
                -->

                <?php require_once 'footer.php'; ?>