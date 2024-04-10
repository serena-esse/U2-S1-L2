<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elaborazione Form di Contatto</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        // Visualizzazione dei dati inviati dal form a fini di debug
        echo "<h2>Dati Ricevuti:</h2>";
        echo "<p><strong>Nome:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Messaggio:</strong><br>$message</p>";
    } else {
        echo "<p>Errore: La richiesta deve essere inviata tramite metodo POST.</p>";
    }
    ?>
</body>
</html>