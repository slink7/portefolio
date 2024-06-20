<!DOCTYPE html>

<?php include_once("utils.php") ?>

<html lang="fr">
<head>
    <?php include("head.php") ?>
</head>
<body>
    <?php include("header.php") ?>
    

    <section id="hero">
        <div class="container">
            <h2>Bienvenue sur meeeon Portfolio</h2>
            <p>Découvrez mes projets et compétences en développement informatique</p>
            <a href="#projects" class="btn">Voir mes projets</a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2> À propos de moi </h2>
            <p>
                Je m'appelle Sébastien Cambier. Je suis développeur informatique spécialisé dans le bas
                niveau. J'ai commencé a coder quand j'etais en 6e avec de la programmation simplifié
                comme scratch et maitrise aujourd'hui des langages largement utilisés comme le C, C++ et C#.
            </p>
            <p>
                J'ai fais deux ans de license informatique, dans laquel j'ai eu du mal a m'epanouir et je
                suis désormais étudiant a l'ecole 42 dans laquel je nage comme un poisson dans l'eau !
            </p>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Mes Projets</h2>
            <div class="project-grid">
                <?php project_preview("Flappy Bird", "Petit projet de replication du celebre jeu jeux flappy bird", "images/preview_flappy_bird.png", "flappy_bird.php") ?>
                <?php project_preview("Tanks", "Prototype de recreation du jeu de tanks sur wii play", "", "projets/tanks/projet.php") ?>
                <?php project_preview("Sninke", "Jeu de snake remasterisé", "", "projets/sninke/projet.php") ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>N'hésitez pas à me contacter via <a href="mailto:slink794@gmail.com">email</a> ou sur mes réseaux sociaux.</p>
        </div>
    </section>
    
    <?php include("footer.php") ?>
    
</body>
</html>
