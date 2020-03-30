<?php

    require('config.php');

    if($_POST['pwd'] == $password) {

a:

        $urllong = $_POST['long'];

        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < '4'; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $urlshort = $randomString;

        if(!file_exists($urlshort .'/index.php')) {
            mkdir($urlshort, 0777, true);

            $file = fopen($urlshort ."/index.php", "w");
            fwrite($file, "<?php header('Location: " .$urllong ."');");

            fclose($file);

            header('Location: index.php?link=success&url=' .$urlshort);
        }
        else {
            goto a;
        }
    }
    else {
        header('Location: index.php?password=wrong');
    }
