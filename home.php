<?php
session_start();

// Verifica se l'utente è autenticato
if (!isset($_SESSION['username'])) {
    // Se l'utente non è autenticato, reindirizza alla pagina di login
    header('Location: index.html');
    exit;
}

// Ottieni il nome utente dalla sessione
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema DrayFire Interno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Benvenuto, <?php echo $username; ?>!</h1>
    </header>
    <main>
        <section id="profile">
            <h2>Profilo</h2>
            <div>
                <img src="profile_image.jpg" alt="Immagine Profilo">
                <p><?php echo $username; ?></p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Sistema DrayFire Interno</p>
    </footer>
</body>
</html>
