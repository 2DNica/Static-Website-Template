 <?php

    require('inc/config.php');
    require('inc//connessione.php');


    if (isset($_POST['submit'])) {
        $nome = 'test';
        $email = 'test@dwb.it';

        $query = mysqli_query($conn, " INSERT INTO contact_form (nome, email) VALUES ('$nome', '$email') ");
        if ($query) {
            echo  'Dati inseriti con successo!';
            $query = "success"; // Query successful
        } else {
            echo 'Errore';
            $query = "error"; // Query failed
        }
    }

    ?>





 <div class="container-fluid py-5 ">
     <div class="row bg-light">

         <div class="col-md-6 text-end " style="background-repeat: no-repeat!important; 
            padding:150px 0 150px; 
            background:url('assets/images/risorsa-6.png'); background-position: left bottom; background-size:cover">

         </div>

         <div class="col-md-6 px-5 py-5">


             <?php
                // Controllo invio
                if (isset($_GET['invio'])) {
                    if ($_GET['invio'] == "ok") {
                ?>
                     <div class="alert alert-success text-center" role="alert">
                         Grazie per averci scritto. Risponderemo al più presto!
                     </div>
                 <?php
                    } else {
                    ?>
                     <div class="alert alert-danger text-center" role="alert">
                         Si è verificato un errore, riprova!
                     </div>
             <?php
                    }
                }
                ?>


             <h2 class="text-center pt-4">CONTATTACI</h2>

             <form id="form" action="/project_flow_cloud/funzioni/send.php" method="post">
                 <div class="mb-3">
                     <label for="nome" class="form-label"> </label>
                     <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="NOME E COGNOME" required>

                 </div>
                 <div class="mb-3">
                     <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="E-MAIL" required>

                 </div>
                 <div class="mb-3">
                     <label for="email" class="form-label"> </label>
                     <textarea name="messaggio" id="messaggio" class="form-control" cols="10" rows="5" placeholder="MESSAGGIO" required></textarea>

                 </div>
                 <div class="form-check text-start">
                     <input class="form-check-input" type="checkbox" value="accettato" id="flexCheckDefault">
                     <label class="form-check-label " for="flexCheckDefault">
                         <a href="#"> Privacy Policy </a>
                     </label>
                 </div>
                 <div class="d-flex justify-content-end pb-3">
                     <button type="submit" class="btn btn-dark btn-standard ">Invia</button>


                 </div>


             </form>


         </div>
     </div>
 </div>