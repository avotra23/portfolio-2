const liquidToggle = document.getElementById('liquidToggle');
    const liquidNav = document.getElementById('liquidNav');

    liquidToggle.addEventListener('click', () => {
      liquidNav.classList.toggle('open');
      
      if(liquidNav.classList.contains('open')) {
        liquidToggle.innerText = '✕';
        liquidToggle.style.background = '#ff0055';
        liquidToggle.style.color = '#fff';
      } else {
        liquidToggle.innerText = 'Menu';
        liquidToggle.style.background = '#00ffa3';
        liquidToggle.style.color = '#000';
      }
    });