document.addEventListener('DOMContentLoaded', function() {
    // if(getCookie("cookieConsent") != "accepted") {
    //     window.openModal('cookie');
    // }

    const query = document.querySelector('#query');

    query.addEventListener('keyup', function(event) {
        if(event.keyCode === 13) {
            let search = query.value;

            window.location.href = "/search?q=" + search;
        }
    });

    query.addEventListener('input', function(event) {
        let search = query.value;
    });

    // $("#submit_commentaire").on('click', function() {
    //     const formData = {
    //         'comment': $('#comment').val(),
    //         '_token': $('input[name="_token"]').val()
    //     }
    //     $.ajax({
    //         url: "/comment",
    //         method: "POST",
    //         data: formData,
    //         success: function(reponse) {
    //             if(reponse.status == "success") {
    //                 $("#commentaire-modal").addClass('hidden').removeClass('flex')
    //             }
    //         }
    //     })
    // })
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

window.rejectAllCookies = function() {
    $.ajax({
        url: "/cookie-management",
        method: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            marketing: "declined",
            personalisation: "declined",
        },
        success: function(reponse) {
            setCookie('cookieConsent', 'accepted', 365);
            window.closeModal('cookie');
        },
        error: function(error) {
            console.log(error);
        }
    })
}

window.acceptAllCookies = function() {
    $.ajax({
        url: "/cookie-management",
        method: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            marketing: "accepted",
            personalisation: "accepted",
        },
        success: function(reponse) {
            setCookie('cookieConsent', 'accepted', 365);
            window.closeModal('cookie');
        },
        error: function(error) {
            console.log(error);
        }
    })
}

window.saveCookies = function() {

    $.ajax({
        url: "/cookie-management",
        method: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            marketing: $('input[name="publicite"]:checked').val(),
            personalisation: $('input[name="personalisation"]:checked').val(),
        },
        success: function(reponse) {
            setCookie('cookieConsent', 'accepted', 365);
            window.closeModal('cookie');
        },
        error: function(error) {
            console.log(error);
        }
    })
}

function setCookie(name, value, days) {
    let date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); // Convertir les jours en millisecondes
    let expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

function getCookie(name) {
    let cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i].trim();
        if (cookie.startsWith(name + "=")) {
            return cookie.substring((name + "=").length, cookie.length);
        }
    }
    return null; // Retourne null si le cookie n'est pas trouvé
}
  