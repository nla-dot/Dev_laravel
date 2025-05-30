<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.R.U.D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1> AJOUTER UN ETUDIANT </h1>
    
        <hr>


            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom">
            </div>

            <div class="mb-3">
                <label for="Prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="prenom">
            </div>

            <div class="mb-3">
                <label for="Classe" class="form-label">Classe</label>
                <input type="text" class="form-control" id="Classe" name="classe">
            </div>
                
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a class="btn btn-secondary" href="/etudiant" role="button">Liste etudiants</a>
    

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>