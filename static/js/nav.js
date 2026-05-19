    const liquidToggle = document.getElementById('liquidToggle');
    const liquidNav = document.getElementById('liquidNav');
    let rpl =     '<svg width="30" height="20" viewBox="0 0 30 20" fill="white">'+'<rect width="30" height="3" rx="1.5" />'+'<rect y="8" width="30" height="3" rx="1.5" />'+'<rect y="16" width="30" height="3" rx="1.5" />'+'</svg>';
    liquidToggle.addEventListener('click', () => {
      liquidNav.classList.toggle('open');
      
      if(liquidNav.classList.contains('open')) {
        liquidToggle.innerHTML = '<span>✕</span>';
        liquidToggle.style.background = '#ff0055';
        liquidToggle.style.color = '#fff';
      } else {
        liquidToggle.innerHTML = rpl;
        liquidToggle.style.background = '#2c6aa0';
        liquidToggle.style.color = 'white';
      }
    });

