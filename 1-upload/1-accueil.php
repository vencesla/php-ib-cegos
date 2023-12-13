
<form action="./1-traitement.php" method="POST" enctype="multipart/form-data">
    <!-- contenu formulaire -->
</form>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon formulaire de fichier</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    </head>
    <body>

        <h1>Upload fichier</h1>
        
        <form action="./1-traitement.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="fichier">PDF:</label>
                <input type="file" id="fichier" name="fichier" />
            </div>
            <br/>

            <div>
                <input type="submit" value="Envoyer" />
            </div>


        </form>

    </body>
</html>



