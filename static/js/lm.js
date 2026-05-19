const liquidToggle = document.getElementById('liquidToggle');
    const liquidNav = document.getElementById('liquidNav');

    liquidToggle.addEventListener('click', () => {
      liquidNav.classList.toggle('open');
      
      if(liquidNav.classList.contains('open')) {
        liquidToggle.innerText = '✕';
        liquidToggle.style.background = '#ff0055c4';
        liquidToggle.style.color = '#fff';
      } else {
        liquidToggle.innerText = 'Menu';
        liquidToggle.style.background = 'rgb(44, 106, 160)';
        liquidToggle.style.color = '#000';
      }
    });