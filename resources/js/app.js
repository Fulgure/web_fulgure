document.addEventListener('DOMContentLoaded', function() {
    const cookies = document.cookie.split('; ').reduce((acc, cookie) => {
        const [name, value] = cookie.split('=');
        acc[name] = value;
        return acc;
    }, {});

    if(cookies.cookieConsent != "accepted") {
        window.openModal('cookie');
    }

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
            document.cookie = "cookieConsent=accepted; path=/";
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
            document.cookie = "cookieConsent=accepted; path=/";
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
            document.cookie = "cookieConsent=accepted; path=/";
            window.closeModal('cookie');
        },
        error: function(error) {
            console.log(error);
        }
    })
}
  