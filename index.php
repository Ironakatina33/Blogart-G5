<?php require_once 'header.php'; 
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<a class="img-chateau" href="#"><img src="./src/images/Logo protos.png" alt="BlogArt"></a>

<?php require_once 'footer.php'; ?>