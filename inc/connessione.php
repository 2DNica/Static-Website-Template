<?php

// connessione del database
$conn = mysqli_connect(HOST, 'stadw1307_user', 'u@}5Ku6]^zI9', 'stadw1307_db');
if ($conn == false) {
    die("Errore di connesione" . mysqli_connect_error());
}
