
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon formulaire</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>

        <h1>Mon formulaire</h1>
        
        <form action="./1-affichage.php" method="POST">
            <div>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" />
            </div>
            <br/>

            <div>
                <label for="cours">Cours:</label>
                <input type="text" id="cours" name="cours" />
            </div>
            <br/>
        
            <div>
                <input type="submit" value="Envoyer" />
            </div>

        </form>

    </body>
</html>



