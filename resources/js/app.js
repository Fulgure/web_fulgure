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

    $("#submit_commentaire").on('click', function() {
        const formData = {
            'comment': $('#comment').val(),
            '_token': $('input[name="_token"]').val()
        }
        $.ajax({
            url: "/comment",
            method: "POST",
            data: formData,
            success: function(reponse) {
                if(reponse.status == "success") {
                    $("#commentaire-modal").addClass('hidden').removeClass('flex')
                }
            }
        })
    })
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

window.cookieModal = function(event) {
    event.preventDefault();

    window.openModal('cookie');
}
  