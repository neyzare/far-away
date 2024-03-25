

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            border: 1px solid #ccc;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 500px;
            width: 100%;
        }

        .form-group label {
            font-size: 18px;
        }

        .form-control {
            height: 40px;
            font-size: 16px;
        }

        .btn-primary {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center">Inscription</h2>
        <form action="/far-away/controllers/inscription-controller.php" method="post" >
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required name="nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" required name="prenom">
    </div>
    <div class="form-group">
        <label for="pseudo">Pseudo:</label>
        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
    </div>
    <div class="form-group">
        <label for="motdepasse">Mot de passe:</label>
        <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="Entrez votre mot de passe" required>
    </div>
    <div class="form-group">
        <label for="datenaissance">Date de naissance:</label>
        <input type="date" class="form-control" id="datenaissance" name="datenaissance" required>
    </div>
    <input  type="submit" class="btn btn-primary btn-block" value="submit">
</form>

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
