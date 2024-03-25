<?php 

require_once '../controllers/homepage-controller.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>planning du jour</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>

<style>
nav {

  /* box-shadow: 10px 5px 5px grey; */
  background-color: #E2E2E2;
}

</style>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link" href="./planning.php">Planning</a>
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
    <div class="container">
        <div class="text-center mx-auto my-auto nav-color-entete ">
        <h2 class="my-4">Planning du jour</h2>
        <div>
            <p>Date du jour :  <?php echo date("d/m/Y") ?></p>
            <p id="horloge" style="color:black;font-size:40px;"></p>

        </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Heure</th>
                    <th>Activité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Obtenir le jour actuel en français
                    $jourActuel = strftime("%A");

                    // Afficher l'heure et la cellule éditable uniquement pour le jour actuel
                    for ($hour = 7; $hour <= 23; $hour++) {
                        echo "<tr>";
                        echo "<td>$hour:00</td>";
                        echo "<td contenteditable='true'></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/date.js"></script>
    <script>
        
    </script>
</body>
</html>
