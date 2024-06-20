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
            <h2>Bienvenue sur mon Portfolio !</h2>
            <p> Découvrez mes projets et compétences en développement informatique </p>
            <a href="#projects" class="btn"> Voir mes projets projets </a>
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
                J'ai fais deux ans de license informatique, dans laquelle j'ai eu du mal a m'epanouir et je
                suis désormais étudiant a l'ecole 42 dans laquel je nage comme un poisson dans l'eau !
            </p>
            <p>
                Au cours de mes aventures, j'ai pu toucher a une grande diversité de langages/frameworks, comme
                le C, C++, C#, Java, Lua, Ocaml, Python, Html, Css, Javascript, Laravel, Unity, Godot, HLSL, Mysql, Asm
            </p>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Mes Projets</h2>
            <h3> Jeux </h3>
            <div class="project-grid">
                <?php project_preview("Game of Life", "Le jeu de la vie de John Connway", "images/preview_gol.gif", "404.php") ?>
                <?php project_preview("Sninke", "Jeu de snake remasterisé", "images/preview_sninke.png", "404.php") ?>
                <?php project_preview("Tanks", "Recréation du mini-jeu de tanks de WiiPlay", "images/preview_tanks.png", "404.php") ?>
                <?php project_preview("Flappy Bird", "Replique du célèbre jeu Flappy Bird", "images/preview_flappy_bird.png", "flappy_bird.php") ?>
                <?php project_preview("ProjetSB", "Un petit sandbox 2d", "images/preview_projetsb.png", "404.php") ?>
                <?php project_preview("ProjetVS2J", "Un petit jeu 2joueur local pour passer du temps", "images/preview_projetvs2j.png", "404.php") ?>
                <?php project_preview("Hex", "Le jeu de Hex en java multijoueur", "images/preview_hex.png", "404.php") ?>
                <?php project_preview("Othello", "Le jeu Othello en java", "", "404.php") ?>
            </div>
            <h3> Tech démo </h3>
            <div class="project-grid">
                <?php project_preview("NormalMaps", "Une démo de l'affichage de normal maps", "images/preview_normal.gif", "404.php") ?>
                <?php project_preview("Perlin Noise", "Une démo de perlin noise", "images/preview_perlin_noise.png", "404.php") ?>
                <?php project_preview("NeuralDrones", "Des réseaux neuronaux qui tentent de controller des drones", "", "404.php") ?>
                <?php project_preview("Wave Function Collapse", "Algorithme de génération procédurale", "images/preview_WFC.png", "404.php") ?>
                <?php project_preview("Shaders", "Une compilation de Fragment shader ecrits en HLSL", "", "404.php") ?>
                <?php project_preview("ConsoleRenderer", "Une démo d'affichage de models 3D dans la console", "images/preview_CR.gif", "404.php") ?>
                <?php project_preview("Marching Cubes", "Algorithme de modélistation 3d procedurale", "images/preview_marching_cubes.png", "404.php") ?>
            </div>
            <h3> Projets 42 </h3>
            <div class="project-grid">
                <?php project_preview("Libft", "Une petite version de la stdlib C", "", "404.php") ?>
                <?php project_preview("ft_printf", "Une reproduction de la fonction printf simplifié", "", "404.php") ?>
                <?php project_preview("get_next_line", "Lire la prochaine ligne d'un fichier", "", "404.php") ?>
                <?php project_preview("Born2beroot", "Configuration d'une VM", "", "404.php") ?>
                <?php project_preview("push_swap", "Trier deux piles efficacement", "", "404.php") ?>
                <?php project_preview("minitalk", "Un projet client/serveur communiquant avec des signaux UNIX", "", "404.php") ?>
                <?php project_preview("Fdf", "Affichage de terrain en fils de fer", "", "404.php") ?>
                <?php project_preview("philosopher", "Petite simulation mettant en scene les threads", "", "404.php") ?>
                <?php project_preview("minishell", "Recréation d'un shell simplifié", "", "404.php") ?>
                <?php project_preview("cub3d", "Un petit Wolfenstein-like", "", "404.php") ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>
                N'hésitez pas à me contacter via <a href="mailto:slink794@gmail.com">email (slink794@gmail.com)</a> ou sur mes réseaux sociaux.
            </p>
            <p><a target="_blank" href="https://www.instagram.com/slink794/"> Instagram </a></p>
            <p><a target="_blank" href="https://www.github.com/slink7"> Github </a></p>
            <p><a target="_blank" href="https://www.twitter.com/slink794"> Twitter / X </a></p>
            <p> Discord: slink7 </p>
        </div>
    </section>
    
    <?php include("footer.php") ?>
    
</body>
</html>
