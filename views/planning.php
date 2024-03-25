<?php 

require_once '../controllers/planning-controller.php'
?>


<!DOCTYPE html>
<html>
<head>
    <title>Emploi du temps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
      .container {
        max-width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
    }

    .navbarperso {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5em;
    }

    .navbarperso h2 {
        margin: 0; /* Pour supprimer la marge par défaut sur le titre */
        
    }

    .navbarperso form {
        margin-left: auto;

    }

    .table-container {
    max-height: 588px;
    overflow-y: auto;
    width: 1050px;
    margin: 0 auto; /* Centrer le conteneur dans la page */
    border: 1px solid #027BFF; /* Ajoute une bordure pour délimiter la zone de défilement */
}

table { 
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding: 20px;
    white-space: nowrap;
}

</style>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbarperso">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Far Away</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./homepage.php">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lien
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <form action="../controllers/deconnection-controller.php" method="POST">
      <input  class="btn btn-outline-success" type="submit" value="Deconnection">
      </form>
</nav>
        <div class="table-container">
        <table class="emploie-du-temps">
            <thead>
                <tr>
                    <th>Heure</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
            </thead>
            <tbody>
                <!-- Plages horaires de 7h à 23h -->
                <script>
                    for (let hour = 7; hour <= 23; hour++) {
                        document.write("<tr>");
                        document.write("<td>" + hour + ":00</td>");
                        for (let day = 0; day < 7; day++) {
                            document.write("<td contenteditable='true'></td>");
                        }
                        document.write("</tr>");
                    }
                </script>
            </tbody>
            
        </table>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
