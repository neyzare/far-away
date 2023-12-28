<!DOCTYPE html>
<html>
<head>
    <title>Emploi du temps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Emploi du temps</h2>
        <table class="table table-bordered">
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

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
