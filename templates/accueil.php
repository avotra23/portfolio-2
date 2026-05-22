<?php 
    include('base.php'); 
    $_SESSION['page'] = "Accueil";
?>
<main>
    <section class="section" id="profil">
        <div id="p-left">
            <h2 class="ml9">
                <span class="text-wrapper">
                    <span class="letters">BACK-END DEVELOPPER !</span>
                </span>
            </h2>
            <p id="description">
                Je m'appelle <strong>ANDRIANOMENJANAHARY Manda Avotriniaina</strong>. Développeur passionné, je me spécialise dans la conception d'architectures back-end robustes et performantes. Rigoureux et persévérant, j'ai à cœur de transformer vos idées en solutions numériques concrètes.
            </p>
            <blockquote id="motivation">
                "La puissance d'une solution ne se voit pas, elle se ressent dans sa fluidité."
            </blockquote>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <defs>
                    <symbol id="arrow" viewBox="0 0 100 100">
                    <path d="M12.5 45.83h64.58v8.33H12.5z"/>
                        <path d="M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z"/>
                    </symbol>
                </defs>
            </svg> 
            <div id="btn">
                <a href="#projet" class="buttonrp">
                    Voir mes realisations
                    <span>
                        <svg>
                        <use xlink:href="#arrow" href="#arrow"></use>
                        </svg>
                    </span>
                </a>
                <a class="buttoncv">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                        <g fill="none" fill-rule="evenodd">

                        <circle class="inner-circle" cx="60" cy="60" r="39" fill="#FFF"/>

                        <path class="menu-button" fill="#9B9B9B" fill-rule="nonzero" d="M60 40v30l-10-10h-10l20 20 20-20h-10l-10 10V40z"/>

                        <g class="outer-circle">
                        <circle cx="60" cy="60" r="53" stroke="#9B9B9B" transform="rotate(90 60 60)"/>
                        <circle cx="60" cy="7" r="2" fill="#9B9B9B"/>
                        <circle cx="60" cy="113" r="2" fill="#9B9B9B"/>
                        <circle cx="113" cy="60" r="2" fill="#9B9B9B"/>
                        <circle cx="7" cy="60" r="2" fill="#9B9B9B"/>
                        </g>

                        </g>
                    </svg>
                </a>
            </div>
                    
        </div>
        <div id="p-right">            
            <img src="../static/image/personne.avif" alt="Photo de profil de ANDRIANOMENJANAHARY Manda Avotriniaina" id="pers">
            
        </div>
    </section>
    <section class="section" id="chiffre">
            <div class="counter-box">
                <div class="counter" data-target="2">0</div>
                <div class="label">Experiences</div>
            </div>

            <div class="counter-box">
                <div class="counter" data-target="7">0</div>
                <div class="label">Projets</div>
            </div>

            <div class="counter-box">
                <div class="counter" data-target="6">0</div>
                <div class="label">Technologies & Framewok</div>
            </div>

            <div class="counter-box">
                <div class="counter" data-target="2">0</div>
                <div class="label">Certification</div>
            </div>
    </section>
    <hr class="Tech">
    <section class="section" id="TecPro">
        <h2></h2>
    </section>
    <hr class="Projets">
    <section class="section" id="TecPro">

    </section>
<main>
<script>
    var textWrapper = document.querySelector('.ml9 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
        targets: '.ml9 .letter',
        scale: [0, 1],
        duration: 1500,
        elasticity: 600,
        delay: (el, i) => 45 * (i+1)
    }).add({
        targets: '.ml9',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>