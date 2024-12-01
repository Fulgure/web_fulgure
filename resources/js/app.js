document.addEventListener('DOMContentLoaded', function() {
    const query = document.querySelector('#query');

    query.addEventListener('keyup', function(event) {
        if(event.keyCode === 13) {
            let search = query.value;

            window.location.href = "/search?q=" + search;
        }
    });

    query.addEventListener('input', function(event) {
        let search = query.value;

        console.log(search);
    });
});

// Fonction pour ouvrir la modal
window.openModal = function (modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    }
}
  
// Fonction pour fermer la modal
window.closeModal = function(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
}
  