<?php require_once 'header.php';
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<div div class="container text-center">
    <a class="img-chateau" href="#"><img src="src\images\chateau.png" alt="BlogArt"></a>

    <div class="rubri-dartic">
        <h1 style="background-color:white ; width : 400px; margin:auto"> Derniers Articles </h1>
        <a class="bababoi" href="#"><img src="src\images\bababoi.png" alt="BlogArt"></a>
        <div style="background-color:white; width:1300px">
            <div>
                <h2 style="text-align:end; margin-right:100px"> Article 1 </h2>
                <p style="text-align:end; margin-right:100px"> Lorem Ipsum vfisviufbvfbvberfcferivbfdvberbviuhrvliufsvidsbvibfsiuv</p>
            </div>
            <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
            <a class="bababoi" href="#"><img src="src\images\bababoi.png" alt="BlogArt"></a>
            <h2 style="text-align:end; margin-right:100px"> Article 2 </h2>
            <p style="text-align:end; margin-right:100px">Lorem Ipsum fvfdvhfdvbvvfhvhfdbvhfdbvbjvfjvifsvkfjsvbkjsvijfvjfsvfliuvfdi</p>
            <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
            <br>
            <br>
        </div>
        <br>
    </div>

    <div class="rubri-deve">
        <h1 style="background-color:white; width : 400px; margin:auto"> évènements </h1>
        <a class="bababoi" href="#"><img src="src\images\bababoi.png" alt="BlogArt"></a>
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
        <a class="bababoi" href="#"><img src="src\images\bababoi.png" alt="BlogArt"></a>
        <div style="background-color:white; width:1300px">
            <h2 style="text-align:end; margin-right:100px"> L'interview</h2>
            <p style="text-align:end; margin-right:100px">Lorem Ipsum fcefuhviefiefifvfiferuhfiuhiuhiuifjziefuhrzfsfqfezifiezfijdsfodjofijezifjdsfà</p>
            <button type="button" class="btn btn-primary justify-content-md-end" style="background-color:orange; display:block; float:right">En savoir plus</button>
            <br>
            <br>
        </div>
        <br>
    </div>

    <?php require_once 'footer.php'; ?>