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