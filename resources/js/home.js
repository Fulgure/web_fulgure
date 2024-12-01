document.addEventListener('DOMContentLoaded', function() {
    const count = parseInt(document.querySelector("#count_search").getAttribute("data-search-count"), 10);
    let i = 1;

    const interval = setInterval(() => {
        if (i <= count) {
            document.querySelector("#count_search").textContent = i;
            i++;
        } else {
            clearInterval(interval); // Arrête le setInterval lorsque i dépasse count
        }
    }, 100); // Met à jour toutes les secondes
});
