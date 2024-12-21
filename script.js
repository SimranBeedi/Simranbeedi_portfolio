document.addEventListener('DOMContentLoaded', () => {
    const words = ["Frontend Developer", "Backend Developer", "Full-Stack Developer", "Creative Designer"];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    const dynamicTextElement = document.getElementById("dynamic-text");

    function typeEffect() {
        if (isDeleting) {
            currentWord = words[j].substring(0, currentWord.length - 1);
        } else {
            currentWord = words[j].substring(0, currentWord.length + 1);
        }

        dynamicTextElement.textContent = currentWord;

        if (!isDeleting && currentWord === words[j]) {
            isDeleting = true;
            setTimeout(typeEffect, 2000);
        } else if (isDeleting && currentWord === "") {
            isDeleting = false;
            j = (j + 1) % words.length;
            setTimeout(typeEffect, 500);
        } else {
            setTimeout(typeEffect, isDeleting ? 100 : 200);
        }
    }

    typeEffect();
});
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            const headerOffset = 80; // Height of the fixed header
            const elementPosition = target.getBoundingClientRect().top + window.scrollY;
            const offsetPosition = elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        });
    });
///navbar
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
//contact
document.getElementById('contact-form').addEventListener('submit', function(event) {
    const name = document.querySelector('input[name="name"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const message = document.querySelector('textarea[name="message"]').value.trim();

    if (!name || !email || !message) {
        event.preventDefault();
        alert('All fields are required.');
    }
});
