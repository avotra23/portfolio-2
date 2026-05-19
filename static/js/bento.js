const bentoBtn = document.getElementById('bentoBtn');
    const bentoNav = document.getElementById('bentoNav');

    bentoBtn.addEventListener('click', () => {
      bentoNav.classList.toggle('active');
      bentoBtn.innerText = bentoNav.classList.contains('active') ? 'FERMER' : 'MENU';
    });