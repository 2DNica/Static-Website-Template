## Anteprima del Sito

Puoi vedere l'anteprima del sito cliccando su [Anteprima del Sito](preview.pdf).



## Descrizione

Un sito web sviluppato utilizzando PHP, Bootstrap, JavaScript e HTML. 
Il sito offre un'interfaccia user-friendly che permette agli utenti di contattare tramite contact form. Utilizzando phpMyAdmin per la gestione del database, il sito assicura un'archiviazione sicura e organizzata dei dati degli utenti.
L'interfaccia moderna e reattiva, resa possibile da Bootstrap, garantisce un'esperienza utente ottimale sia su dispositivi desktop che mobili.

## Database Information
Il database di questo progetto è stato gestito utilizzando phpMyAdmin. Durante il mio stage, mi è stato fornito un account cPanel che includeva l'accesso al database. Si prega di notare che le credenziali del database e gli account utente sono specifici per il mio account cPanel. Chiunque copi questo progetto dovrà aggiornare le credenziali del database nei file di configurazione per adattarle al proprio setup cPanel

## Installazione

1. **Clonare la repository**
    ```bash
    git clone https://github.com/tuo-nome-utente/Gestionale2DNica.git
    cd Gestionale2DNica
    ```

2. **Configurare il database**
   - Importa il file `database.sql` in phpMyAdmin per creare il database e le tabelle.
   - Modifica il file `db_conn.php` con le tue credenziali del database.

3. **Esegui il server locale**
    ```bash
    php -S localhost:8000
    ```

4. **Accedi all'applicazione**
    Apri il browser e vai su `http://localhost:8000`

## Contributi

Siamo aperti ai contributi! Ecco come puoi contribuire:
1. Fai un fork del repository.
2. Crea un nuovo branch (es. `feature/nome-funzionalità`).
3. Fai le modifiche necessarie e committale.
4. Apri una pull request.

## Licenza

Questo progetto è sotto licenza MIT. Vedi il file [LICENSE](LICENSE) per i dettagli.
