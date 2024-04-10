<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1 class="mt-5"> Landing Page</h1>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <form action="process_form.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Messaggio:</label>
                        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary">Invia</input>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e dipendenze popper.js e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
