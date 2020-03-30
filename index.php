<?php
error_reporting(0);

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" .'/' .$_GET['url'];
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
</head>

<?php

if($_GET['password'] == 'wrong') {
    echo 'Your Password was Wrong!';
}
elseif($_GET['link'] == 'success') {
    echo '<a href="' .$url .'" target="_blank">' .$url .'</a>';
}
?>

<div id="content">
        <form method="post" action="create.inc.php">
            <input type="text" name="long" placeholder="target link">
            <br>
            <input type="password" name="pwd" placeholder="password">
            <hr>
            <button>Create</button>
        </form>
    </div>
</body>
</html>