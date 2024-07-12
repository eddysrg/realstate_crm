const linksNav = document.querySelectorAll(".link-smooth-scroll");
const contactForm = document.querySelector(".contact-form");

document.addEventListener("DOMContentLoaded", () => {
    if (contactForm.classList.contains("has-errors")) {
        contactForm.scrollIntoView({ behavior: "smooth" });
    } else if (contactForm.previousElementSibling) {
        contactForm.scrollIntoView({ behavior: "smooth" });
        setTimeout(() => {
            contactForm.previousElementSibling.style.display = "none";
        }, 4000);
    }

    linksNav.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const targetId = link.getAttribute("href");
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});
