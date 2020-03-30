<?php

require('config.php');

if($_POST['pwd'] == $password) {

    $url['long'] = $_POST['long'];
    $url['short'] = $_POST['short'];

    mkdir($url['short'], 0777, true);

    $file = fopen($url['short'] ."/index.php", "w");
    fwrite($file, "<?php header('Location: " .$url['long'] ."');");

    fclose($file);

    header('Location: index.php?link=success');
}
else {
    header('Location: index.php?password=wrong');
}
