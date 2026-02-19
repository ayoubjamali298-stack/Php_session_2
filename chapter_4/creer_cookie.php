<?php


if (isset($_POST['delete']) )
{
 header("Location: supprimer_cookie.php");
 exit; 
}
if (isset($_POST['sand'])) 
{
    setcookie("utilisateur", $_POST['jamali'], time() + 3600, "/");
    header("Location: creer_cookie.php");
    exit;
}
if (isset($_COOKIE['utilisateur']))
     {
    echo "hi " . $_COOKIE['utilisateur'];
} 
else {
    echo "Aucun cookie trouvé.";
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1> WELCOME</h1><br><br>

        <input type="text" name="jamali">
        <button type="submit" name="sand">
          sand
        </button>
<button type="submit" name="delete">
    delete
</button>
    </form>
</body>
</html>