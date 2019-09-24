 
<!DOCTYPE htlm>
    <html>
        <body>
            <div class="container">
                <h1> Ajout d'une competence</h1>
                <form method="post" action="competence_add.php">
                Competence : <input type="text" class="form-control" name="comp">
                Niveau: <input type="number" class="form-control" name="niveau">
                <input type="submit" class="btn btn-primary"/>
                </form>

                <h1> Modif d'une competence</h1>
                <form method="post" action="modif.php">
                Competence : <input type="text" class="form-control" name="compE">
                Niveau: <input type="number" class="form-control" name="niveauE">
                <input type="submit" class="btn btn-primary"/>
                </form>

                <h1> Suppresion d'une competence</h1>
                <form method="post" action="delete.php">
                Competence : <input type="text" class="form-control" name="compS">
                <input type="submit" class="btn btn-primary"/>
                </form>
            </div>
        </body>
    </html>

 

