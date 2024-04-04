<?php
// Simuliamo una verifica di login di base
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica se le credenziali sono corrette (esempio di credenziali hardcoded per la demo)
if ($username === 'admin' && $password === '01Ajb7Pk54l12s') {
    // Se le credenziali sono corrette, reindirizza alla home di gestione
    session_start();
    $_SESSION['username'] = $username;
    header('Location: home.php');
    exit;
} else {
    // Se le credenziali sono sbagliate, reindirizza nuovamente alla pagina di login con un messaggio di errore
    header('Location: index.html?error=1');
    exit;
}
?>
