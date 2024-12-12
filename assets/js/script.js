const nome = document.getElementById('nome');
const email = document.getElementById('email');
const form = document.getElementById('form');

form.addEventListener('submit', (event) => {
    event.preventDefault(); // Impedisce l'invio immediato del form

    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('messagio').value.trim();

    let isValid = true;

    // Validazione nome
    if (nome.value === '' || nome.value == null) {
        alert('Il campo Nome è obbligatorio');
        isValid = false;
    }

    // Validazione email (espressione regolare di base)
    const emailRegex = /^[\w-.]+@([\w-.]+){2,}$/;
    if (!emailRegex.test(email)) {
        alert('Formato email non valido');
        isValid = false;
    }
    // Validate Messagio
    if (message === '' || messagio.value == null) {
        alert('Il campo Messaggio è obbligatorio');
        isValid = false;
    }

    if (isValid) {
        // Invio form valido (ad esempio, con AJAX o redirect)
        alert('Modulo inviato correttamente!');
        // ... codice per inviare i dati del form ...
    }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default anchor link behavior (jumping to top)
  
      // Get the target element ID without the leading "#"
      const targetId = this.getAttribute('href').slice(1);
  
      // Ensure the target element exists before scrolling
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' });
      } else {
        console.error(`Target element with ID "${targetId}" not found.`); // Handle missing element gracefully
      }
    });
  });
  


























