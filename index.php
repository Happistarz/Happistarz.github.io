<?php 

    ini_set('display_errors', 1);
    
    $db = new PDO('mysql:host=localhost;dbname=mraveleaudb', 'mraveleau', 'EFBq4^stzqdo5wDm');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $db->query('SELECT * FROM projects');
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Mathieu Raveleau, étudiant en BTS SIO 2ème année option SLAM">
    <meta name="keywords" content="Mathieu Raveleau, Portfolio, BTS SIO, SLAM, Développeur Web">
    <meta name="author" content="Mathieu Raveleau">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Portfolio de Mathieu Raveleau">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mraveleau.poupli.net">
    <meta property="og:image" content="https://mraveleau.poupli.net/image.png">
    <meta property="og:description" content="Portfolio de Mathieu Raveleau, étudiant en BTS SIO 2ème année option SLAM">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="mraveleau.poupli.net">
    <meta property="twitter:url" content="https://mraveleau.poupli.net">
    <meta name="twitter:title" content="Portfolio de Mathieu Raveleau">
    <meta name="twitter:description" content="Portfolio de Mathieu Raveleau, étudiant en BTS SIO 2ème année option SLAM">
    <meta name="twitter:image" content="https://mraveleau.poupli.net/image.png">

    <title>Mathieu Raveleau - Portfolio</title>

    <!-- LINKS & SCRIPTS -->
    <!-- link to jquery, gsap, ScrollTrigger, bootstrap css & js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- link to my css & js -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <!-- bottom navbar fixed -->
    <div class="bottom-navbar">
        <ul>
            <li><a href="#home" class="current">ACCUEIL</a></li>
            <li><a href="#skills">COMPETENCES</a></li>
            <li><a href="#projects">PROJETS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>

    <!-- home section -->
    <section id="home">
        <div class="home-container">
            <img src="background.png" style="display:none" width="100%" height="100%">
            <div class="home-content" style="color:black">
                <h1>Mathieu Raveleau</h1>
                <h2><i>Étudiant en <u>BTS SIO</u> 2ème année option <u>SLAM</u></i></h2>
                <a href="#home-info"><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
        <div id="home-info">
            <h3>Mathieu Raveleau</h3>
            <div class="info-container">
                <div class="info-left">
                    <div>
                        <h3 class="info-title">Informations</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Vienne (86)</p>
                        <p><i class="fas fa-cake-candles"></i> 19 ans</p>
                        <p><i class="fas fa-car-side"></i> Permis B & véhiculé</p>
                    </div>
                    <div>
                        <h3 class="info-title">Formations</h3>
                        <p class="formation">
                            <span>
                                BTS SIO 2ème année option
                                <abbr title="Solutions Logicielles et Applications Métiers">
                                    S.L.A.M
                                </abbr>
                            </span>
                            <span>
                                <i class="fas fa-graduation-cap"></i>
                                Lycée Guy Chauvet - Loudun
                            </span>
                        </p>


                        <p class="formation">
                            <span>
                                BAC.
                                <abbr title="Sciences et Technologies de l'Industrie et du Développement Durable">
                                    S.T.I.2.D
                                </abbr>
                                options
                                <abbr title="Système d'Information et Numérique">
                                    S.I.N
                                </abbr>
                                Math Physique
                            </span>
                            <span>
                                <i class="fas fa-graduation-cap"></i>
                                Lycée Nelson Mandela - Poitiers
                            </span>
                        </p>
                    </div>
                </div>
                <div class="info-right">
                    <img src="img/photo.jpg" width="50%" style="border-radius:1.625rem"/>
                </div>
            </div>
            <hr>
            <h3> Tableau de synthèse</h3>
        </div>
        <div class="center" id="tableau">
            <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQumgoCFmYSh25NZyGc7BdJzZiElccf2RdL4A6an2m82Fek2_rbNjvl77JCqZgBEtqMwH9t3RuFBzFb/pubhtml?widget=true&amp;headers=false"></iframe>
        </div>
        <div id="skills">
            <div class="skills-container">
                <h1>Compétences</h1>
                <div class="skills-content">
                    <div class="row">
                        <div class="col">
                            <h3>Langages</h3>
                            <div class="content">

                                <p><i class="fa-brands fa-html5"></i> HTML</p>
                                <p><i class="fa-brands fa-css3-alt"></i> CSS</p>
                                <p><i class="fa-brands fa-php"></i> PHP</p>
                                <p><i class="fas fa-database"></i> SQL</p>
                                <p><i class="fas fa-code"></i> C#</p>
                                <p><i class="fas fa-code"></i> C++</p>
                                <p><i class="fa-brands fa-java"></i> Java</p>
                                <p><i class="fa-brands fa-js"></i> JavaScript</p>
                                <p><i class="fa-brands fa-python"></i> Python</p>
                            </div>
                        </div>
                        <div class="col split">
                            <div class="item">
                                <h3>Logiciels</h3>
                                <div class="content">

                                    <p><i class="fa-brands fa-git"></i> Git</p>
                                    <p><i class="fa-brands fa-github"></i> GitHub</p>
                                    <p><i class="fa-brands fa-docker"></i> Docker</p>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Software</h3>
                                <div class="content">

                                    <p><i class="fa-brands fa-debian"></i>Debian</p>
                                    <p><i class="fa-brands fa-windows"></i> Windows</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div style="height: 100vh;"></div> -->
        <img src="transition.svg" alt="transition" class="transition">
        <div id="projects">
            <h1>Projets</h1>
            <div class="project-content">
                <div class="head">
                    <button class="btn selected" data-type="all">Tous</button>
                    <button class="btn" data-type="formation">Formation</button>
                    <button class="btn" data-type="stage1">Stage 1</button>
                    <button class="btn" data-type="stage2">Stage 2</button>
                    <button class="btn" data-type="perso">Personnel</button>
                </div>
                <div class="categories-info">
                    <p><span>PI:</span> Patrimoine Informatique</p>
                    <p><span>IDAE:</span> Incidents, Demandes d'Assistance et d'Évolution</p>
                    <p><span>DPLO:</span> Développer sa Présence en Ligne de l'Organisation</p>
                    <p><span>TMP:</span> Travailler en Mode Projet</p>
                    <p><span>DUSI:</span> Disposer aux Utilisateurs un Service Informatique</p>
                    <p><span>ODP:</span> Organiser son Développement Professionnel</p>
                </div>
                <div class="projects">
                    <?php foreach ($projects as $project) :
                        extract($project); 
                        ?>
                        <div class="project" data-type="<?php echo $TYPE ?>" data-info="<?php echo $INFO ?>" data-img="<?php echo $IMG ?>" data-categories="<?php echo $CATEGORIES ?>" data-title="<?php echo $TITLE ?>" data-article="<?php echo $ARTICLE ?>" data-links="<?php echo $LINKS ?>">
                            <div style="display:flex;align-items:center">
                                <img src="<?php echo $IMG ?>" alt="<?php echo $TYPE." ". $TITLE ?>">
                            </div>
                            <div class="project-info">
                                <h3><?php echo $TITLE ?></h3>
                                <p><?php echo $INFO ?></p>
                                <div class="categories">
                                <?php $cat = explode(",", $CATEGORIES) ?>
                                    <?php foreach ($cat as $category) : ?>
                                        <span><?php echo $category ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <button>Voir le projet</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="projectmodal">
                    <div class="modal-content">
                        <button class="close"><i class="fas fa-times"></i></button>
                        <div class="row">
                            <div class="col">
                                <img src="" alt="Image du projet">
                                <div class="info">
                                    <p>Aucun projet</p>
                                    <div class="categories">
                                        <span>PI</span>
                                        <span>IDAE</span>
                                        <span>DPLO</span>
                                        <span>TMP</span>
                                        <span>DUSI</span>
                                        <span>ODP</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col spaced">
                                <h3>Aucun Projet</h3>
                                <article>
                                    <p>Aucun projet</p>
                                </article>
                                <div class="links">
                                    <a href=""><i class="fas fa-globe"></i></a>
                                    <a href=""><i class="fas fa-code"></i></a>
                                    <a href=""><i class="fas fa-file-download"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>