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
      <li><a href="#">Accueil</a></li>
        <li><a href="#">A propos</a></li>
        <li><a href="#">TechReal</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <!-- Mobile -->
<div class="liquid-menu-wrapper">
    <nav class="liquid-nav" id="liquidNav">
      <a href="#" class="menu-item item-1">Accueil</a>
      <a href="#" class="menu-item item-2">A propos</a>
      <a href="#" class="menu-item item-3">TechReal</a>
      <a href="#" class="menu-item item-4">Contact</a>
      <button class="main-button" id="liquidToggle">Menu</button>
    </nav>
  </div>