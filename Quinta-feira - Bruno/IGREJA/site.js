// site.js

// --- SCROLL SUAVE ---
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// --- EFEITO DE BOAS-VINDAS ---
window.addEventListener('load', () => {
    const welcome = document.querySelector('.vindas h1');
    if (welcome) {
        welcome.style.opacity = 0;
        welcome.style.transition = "opacity 2s ease-in-out";
        setTimeout(() => {
            welcome.style.opacity = 1;
        }, 500);
    }
});

// --- VALIDAÇÃO DO FORMULÁRIO ---
const form = document.querySelector("form");
if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault(); // impede envio automático

        const nome = document.getElementById("name").value.trim();
        const mensagem = document.getElementById("message").value.trim();

        if (nome === "" || mensagem === "") {
            alert("Por favor, preencha todos os campos antes de enviar 🙏");
            return;
        }

        // Aqui poderia ser enviado para o backend real
        alert("Obrigado, " + nome + "! Sua mensagem foi enviada com sucesso 🙌");
        form.reset();
    });
}

// --- DESTAQUE NA AGENDA ---
const agendaCards = document.querySelectorAll(".agenda-missas div");
agendaCards.forEach(card => {
    card.addEventListener("mouseenter", () => {
        card.style.transform = "scale(1.05)";
        card.style.transition = "transform 0.3s";
    });
    card.addEventListener("mouseleave", () => {
        card.style.transform = "scale(1)";
    });
});
