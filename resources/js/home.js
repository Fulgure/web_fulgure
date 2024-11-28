document.addEventListener('DOMContentLoaded', function() {
    const count = document.querySelector("#count_search").getAttribute("data-search-count")
    let i = 0;
    setInterval(() => {
        for (let i = 0; i <= count; i++) {
            document.querySelector("#count_search").textContent = i
        }
    }, 1000);
})