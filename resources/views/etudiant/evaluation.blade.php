<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dev_laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1> REDIGER UNE EVALUATION </h1>
    
        <hr>


            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom">
            </div>

            <div class="mb-3">
                <label for="Prenom" class="form-label">Date</label>
                <input type="date" class="form-control" id="date input" name="date" placeholder="jj/mm/yy">
            </div>

            <div class="mb-3">
                <label for="Classe" class="form-label">Classe</label>
                <input type="text" class="form-control" id="Classe" name="classe">
            </div>

            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Type</label>
                <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>PHP</option>
                <option>LARAVEL</option>
                <option>PYTHON</option>
                <option>LINUX</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
            </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    <a class="btn btn-secondary" href="/etudiant" role="button">Liste etudiants</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>