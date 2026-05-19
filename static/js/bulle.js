const bubbleNav = document.getElementById('bubbleNav');
    const navToggle = document.getElementById('navToggle');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) bubbleNav.classList.add('scrolled');
      else bubbleNav.classList.remove('scrolled');
    });

    navToggle.addEventListener('click', () => {
      bubbleNav.classList.toggle('open');
    });