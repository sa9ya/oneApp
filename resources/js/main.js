document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("language-button");
    const menu = document.getElementById("language-menu");

    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    button.addEventListener("click", function() {
        menu.classList.toggle("hidden");
    });

    document.addEventListener("click", function(event) {
        if (!button.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add("hidden");
        }
    });

    anchorLinks.forEach(anchor => {
        anchor.addEventListener("click", function (event) {
            event.preventDefault();

            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - document.querySelector("header").getBoundingClientRect().height - 10,
                    behavior: "smooth"
                });
            }
        });
    });
});