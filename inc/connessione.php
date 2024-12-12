<?php

// connessione del database
$conn = mysqli_connect(HOST, 'stadw1307_user', '..........', 'stadw1307_db'); // mettere la password del tuo db
if ($conn == false) {
    die("Errore di connesione" . mysqli_connect_error());
}
