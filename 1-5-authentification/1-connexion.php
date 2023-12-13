<?php
// votre code récupération des données
session_start();
$_SESSION['isconnected']= false;



if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['login']) && isset($_POST['motDePasse'])) {
        $login = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['motDePasse']);
        // constant user and password
        $USER_LOGIN = "admin";
        $USER_PASSWORD = "admin";
        // session variables
        if(!empty($login)  && !empty($pass)) {
            if($login == $USER_LOGIN && $pass == $USER_PASSWORD) {
                echo "Authentification réussie avec succès";
                $_SESSION['isconnected'] = true;
                $cookieName = "connection_acount";
                $expireTime = time() + 60 * 60 * 24 * 30; // expire dans 30 jours
                if(isset($_COOKIE[$cookieName])) {
                    $count = (int)$_COOKIE[$cookieName];
                    $count++; // Incrémente
                }else {
                    $count = 1;
                }
                setcookie($cookieName, $count, $expireTime, "/");
        
                $PASSWORD = $_SESSION['motDePasse'] = $USER_PASSWORD ;
                $LOGIN = $_SESSION['login'] = $USER_LOGIN;
                $LOGIN =  $USER_LOGIN;
                $PASSWORD = $USER_PASSWORD;
                echo "<br/>";
                echo sprintf("Bonjour , vous êtes l'utilisateur %s  et votre mot de passe est : %s", $LOGIN, $PASSWORD);
                echo "<br/>";
            }else{
                echo "Veillez saisir le bon login ou le bon mot de passe";
            }
          
        }
        
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ma page de connexion</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>

       <?php if($_SESSION['isconnected']== false) { ?>
       <div class="container-fluid mg-auto">
       <h1>Connexion</h1>
        
        <form action="./1-connexion.php" method="POST">
            <div class="form-group col-3">
                <label for="login">Login:</label>
                <input class="form-control col-9" type="text" id="login" name="login" />
            </div>
            <br/>
            <div class="form-group col-3">
                <label for="motDePasse">Mot de passe:</label>
                <input class="form-control col-9" type="password" id="motDePasse" name="motDePasse" />
            </div>
            <br/>
            <div class="form-group">
                <input class="btn btn-primary btn-sm" type="submit" value="Envoyer" />
            </div>
        </form>
       </div>

       <?php } else { 
         echo "Hello ". $LOGIN ." c'est la ".$count . " que tu te connectes";
         echo '<br/>';

         echo "<a href='./1-deconnexion.php'>Déconnexion</a>";
       }?>

    </body>
</html>



