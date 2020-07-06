<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>

 <body>
   <?php
        session_start();
        $password = "2020";
        if($password == $_POST['password'])
        {
            $_SESSION['id']= $_POST['login'];
            header('Location:http://localhost:8888/ISCC-2020-J09/EX_01/mini-site-routing.php');
        } 
        else {
            echo "<p>Mauvais couple identifiant / mot de passe.</p>";
            echo "<p>Redirigez vous ici: http://localhost:8888/ISCC-2020-J09/EX_01/connexion.php?page=Page4</p>";
        }
    ?>
 </body>
</html>
