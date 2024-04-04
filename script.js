document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impedisce il submit del form per ora

        // Ottieni i valori inseriti dall'utente
        const username = document.querySelector('input[name="username"]').value;
        const password = document.querySelector('input[name="password"]').value;

        // Esegui la validazione dei campi (puoi aggiungere ulteriori controlli)
        if (username.trim() === '' || password.trim() === '') {
            alert('Inserisci username e password');
            return;
        }

        // Invia i dati del modulo al file PHP tramite AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // La richiesta è stata completata e la risposta è stata ricevuta con successo
                if (xhr.responseText.trim() === 'success') {
                    // Reindirizza alla home dopo il login
                    window.location.href = 'home.php';
                } else {
                    // Visualizza un messaggio di errore se le credenziali sono errate
                    alert('Credenziali errate. Riprova.');
                }
            }
        };
        // Invia i dati del modulo al file PHP
        xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
    });
});
