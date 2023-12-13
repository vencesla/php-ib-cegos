
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
        
        <div class="container">
        <form action="./1-affichage.php" method="GET">
            <!-- Ajouter le champs nom -->
            <div class="form-group">
                <label class="col-6" for="nom">Nom:</label>
                <div class="col-6">
                <input type="text" id="" name="nom" />
                </div>
            </div>
            <br/>
            <div class="form-group">
                <label class="col-6" for="cours">Cours:</label>
                <div class="col-6">
                <input type="text" id="" name="cours" />
                </div>
            </div>
            <br/>
            <p></p>

            <!-- Ajouter le champs cours -->

            <div>
                <input type="submit" value="Envoyer" />
            </div>


        </form>
        </div>

    </body>
</html>



