<div class="svg-container" style="height: 0; width: 0; position: absolute;">
  <svg>
    <filter id="liquid-goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 19 -9" result="goo" />
      <feBlend in="SourceGraphic" in2="goo" />
    </filter>
  </svg>
</div>

  <!-- Desktop -->
  <nav class="nav-desktop">
    <div style="font-weight: bold;">✨ MTechA</div>
    <ul class="nav-links-desktop">
      <li><a href="accueil.php">Accueil</a></li>
        <li><a href="#">A propos</a></li>
        <li><a href="#">TechReal</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <!-- Mobile -->
<div class="liquid-menu-wrapper">
    <nav class="liquid-nav" id="liquidNav">
      <a href="#accueil" class="menu-item item-1"><img src="../static/image/accueil.png" alt="Accueil"  ></a>
      <a href="#" class="menu-item item-2"><img src="../static/image/information.png" alt="Info"  ></a>
      <a href="#" class="menu-item item-3"><img src="../static/image/tech-support.png" alt="TechReal"  ></a>
      <a href="#" class="menu-item item-4"><img src="../static/image/courriel-de-contact.png" alt="Contact" ></a>
      <button class="main-button" id="liquidToggle">
        <svg width="30" height="20" viewBox="0 0 30 20" fill="white">
          <rect width="30" height="3" rx="1.5" />
          <rect y="8" width="30" height="3" rx="1.5" />
          <rect y="16" width="30" height="3" rx="1.5" />
        </svg>
      </button>
    </nav>
  </div>