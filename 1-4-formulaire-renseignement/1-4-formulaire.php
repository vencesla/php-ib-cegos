
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire demande informations</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>

        <h1>Mon formulaire</h1>
        
        <form action="./1-4-traitement.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" />
            </div>
            <br/>

            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="mail" name="email" />
            </div>
            <br/>

            <!-- Ajouter les autres champs ville -->
            <div>
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" />
            </div>
            <br/>
            <div>
                <label for="ville">Message:</label>
                <textarea name="message" id="" cols="30" rows="5"></textarea>
            </div>
            <br/>
            <div>
            <label for="ville">Votre CV :</label>
                <input type="file"  name="fichier" enctype="multipart/form-data"/>
            </div>
            <br/>

            <div>
                <input type="submit"  value="Envoyer" />
            </div>
            <br/>

        </form>

    </body>
</html>



