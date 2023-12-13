
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon premier formulaire</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>
    <body>

    <div class="container-fluid">
    <h1 class="text-center">Mon formulaire</h1>
        
        <form action="reponse.php" method="Get">
            <div class="form-group">
                <label class="col-6" for="nom">Nom:</label>
               <div class="col-6">
               <input type="text" id="nom" name="nom" class="form-control" placeholder="Veillez entrer votre nom" />
               </div>
            </div>
            <br/>

            <div  class="form-group">
                <label class="col-6" for="prenom">Prénom:</label>
                <div class="col-6">
                <input type="text" id="prenom" name="prenom" placeholder="Veillez entrer votre prenom">
                </div>
            </div>
            <br/>
            <div>
                <label class="col-6" for="email">E-mail:</label>
                <div class="col-6">
                <input type="email" id="mail" name="email" placeholder="Veillez entrer votre email" />
                </div>
            </div>
            <br/>

            <!-- Ajouter le champ ville -->
            <div class="form-group">
                <label class="col-6" for="ville">Ville:</label>
                <div class="col-6">
                <input type="ville" id="ville" name="ville" placeholder="Veillez entrer votre ville" />
                </div>
            </div>
            <br />

            <!-- Ajouter le champ code postal -->
            <div class="form-group">
                <label for="cp">Code Postal:</label>
                <div class="col-6">
                <input type="text" id="cp" name="cp" placeholder="Code postal" />
                </div>
            </div>
            <br />
            <!-- Ajouter le champ mois et année de naissance -->
            <div class="form-group">
                <label class="col-6" for="moisAnne">Mois et année de naissance:</label>
                <div class="col-6">
                <input type="date" id="" name="moisAnne" />
                </div>
            </div>
            <br/>

            <!-- Ajouter le champ PDF -->
            <div class="form-group">
                <label class="col-6" for="fichier">Ajouter un fichier:</label>
                <div class="col-6">
                <input type="file" id="" name="fichier" />
                </div>
            </div>
            <br/>

            <div class="form-group">
                <label class="col-6" for="message">Message:</label>
                <div class="col-6">
                <textarea name="message" id="" cols="35" row="10"></textarea>
                </div>
            </div>
            <br/>

            <div class="form-group">
                <label class="col-6" for="password">Mot de passe:</label>
                <div class="col-6">
                <input type="password" id="password" name="password" />
                </div>
            </div>
            <br/>

            <!-- Ajouter Le champ de soumission du formulaire -->
            <div>
                <input type="submit"  name="envoyer" value="Envoyer" />
            </div>

        </form>

    </div>
        
    </body>
</html>



