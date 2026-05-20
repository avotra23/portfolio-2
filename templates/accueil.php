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
            <a href="#projets" class="btn">Voir mes réalisations >>></a>
        </div>
        <div id="p-right">
            <!-- Utilisation d'un titre h2 pour le contexte de l'image -->
            
            <img src="../static/image/personne.avif" alt="Photo de profil de ANDRIANOMENJANAHARY Manda Avotriniaina" id="pers">
        </div>
    </section>
    <hr class="Tech">
    <section class="section" id="TecPro">

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