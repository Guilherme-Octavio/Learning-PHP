<?php
session_start();
//unset($_SESSION[#name#])
if(isset($_POST['destroy']))
{
    session_destroy();
    echo "session destruida";
}if (isset($_POST['unset'])) {
    session_unset(); 
    echo "session unset";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="submit" name="destroy" value="Destroy">
    <input type="submit" name="unset" value="unset">
    
    </form>
    <form action="./01.php" method="post">
    <input type="submit" name=""set value="set">
    </form>
</body>
</html>