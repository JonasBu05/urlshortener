<?php
error_reporting(0);
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
    echo 'Link Successful Created!';
}
?>

<div id="content">
        <form method="post" action="create.inc.php">
            <input type="text" name="long" placeholder="target link">
            <br>
            <input type="text" name="short" placeholder="short link">
            <br>
            <input type="password" name="pwd" placeholder="password">
            <hr>
            <button>Create</button>
        </form>
    </div>
</body>
</html>