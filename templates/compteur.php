<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compteur animé design</title>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
    }

    h1 {
        margin-bottom: 40px;
        font-weight: 600;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .counter-box {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px 50px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        margin: 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .counter-box:hover {
        transform: translateY(-5px);
    }

    .counter {
        font-size: 3rem;
        font-weight: bold;
        color: #ffdd57;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .counter.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .label {
        font-size: 1.2rem;
        margin-top: 10px;
        color: #f0f0f0;
    }
</style>
</head>
<body>

<h1>Statistiques en direct</h1>

<div class="counter-box">
    <div class="counter" data-target="1500">0</div>
    <div class="label">Utilisateurs</div>
</div>

<div class="counter-box">
    <div class="counter" data-target="320">0</div>
    <div class="label">Projets</div>
</div>

<div class="counter-box">
    <div class="counter" data-target="75">0</div>
    <div class="label">Partenaires</div>
</div>

<script>
/**
 * Anime un compteur jusqu'à un chiffre voulu
 * @param {HTMLElement} el - élément compteur
 * @param {number} target - valeur finale
 * @param {number} duration - durée en ms
 */
function animateCounter(el, target, duration) {
    let start = 0;
    let startTime = null;

    function updateCounter(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const value = Math.floor(progress * target);
        el.textContent = value.toLocaleString(); // format avec séparateurs
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        }
    }
    requestAnimationFrame(updateCounter);
}

// Observer pour déclencher l'animation au scroll
const counters = document.querySelectorAll('.counter');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.getAttribute('data-target'), 10);
            el.classList.add('visible');
            animateCounter(el, target, 2000); // durée 2s
            observer.unobserve(el);
        }
    });
}, { threshold: 0.5 });

// Attacher l'observer à chaque compteur
counters.forEach(counter => observer.observe(counter));
</script>

</body>
</html>
