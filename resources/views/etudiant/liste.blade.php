<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>liste des etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <h1>Liste des etudiants</h1>
        <hr>
        <a class="btn btn-primary" href="/ajouter" role="button">Ajouter un etudiant</a>
        <a class="btn btn-primary" href="/evaluation" role="button">Rediger une evaluation</a>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>  
              <th scope="col">Classe</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>1ere</td>
              <td>
                <a class="btn btn-warning" href="#" role="button">modifier</a>
                <a class="btn btn-danger" href="#" role="button">Supprimer</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>2nd</td>
              <td>
                <a class="btn btn-warning" href="#" role="button">modifier</a>
                <a class="btn btn-danger" href="#" role="button">Supprimer</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>John</td>
              <td>Doe</td>
              <td>Terminale</td>
              <td>
                <a class="btn btn-warning" href="#" role="button">modifier</a>
                <a class="btn btn-danger" href="#" role="button">Supprimer</a>
                
              </td>
            </tr>
          </tbody>
      </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>