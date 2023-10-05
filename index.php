<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="favicon1.png" />
    <title>Restaurant ROMERY</title>
</head>


<!-- Page pour le menu ! -->

<body>
    <header>
        <nav id="nav" class="">
            <h3><a href="index.html"><img class="logo-menu-navbar" src="./img/logo_test-removebg.png"></a></h3>
            <ul>
                <li>
                    <a href="#aboutus">A propos de nous</a>
                </li>
                <li>
                    <a href="#">Menu</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div id="icons"></div>
        </nav>
    </header>
    <main>
        <div id="home"><img src="./img/logo_test-removebg.png"></div>
        <div class="home-txt">
            « Le ROMERY fait rimer originalité avec générosité, sur la base de beaux produits du terroir. répertoire
            lyonnais revisité, ou pure création : chaque menu propose une variation gourmande dans une ambiance feutrée.
            Nouveauté : la table d’hôte de quatre convives située en cuisine, au coeur de l’action ! »

            <p class="gm">Guide Michelin, 2023</p>
        </div>
        <h2 id="aboutus"><img src="./img/ABOUTUS.png"></h2>
        <p>
        <div class="slider">
            <div class="slide">
                <img src="./img/Donald.png" alt="Donald Grump">
                <p> Niché au cœur de la vibrante Lyon, ROMERY n'est pas simplement un restaurant : c'est une expérience
                    culinaire
                    innovante, une symbiose audacieuse entre le dynamisme du fast food et la finesse de la haute
                    gastronomie
                    présenté
                    par notre chef Donald Crampe. Dans notre établissement, chaque détail est méticuleusement pensé, du
                    design élégant
                    et luxueux de notre local à la qualité incomparable de chaque ingrédient que nous sélectionnons.

                    Bienvenue dans la Fastronomie.</p>
            </div>
            <div class="slide">
                <img src="./img/Elon.png" alt="Elon Musque">
                <p>L'expérience ROMERY ne s'arrête pas à l'assiette. Notre local, par sa conception moderne et luxueuse,
                    offre un cadre éblouissant qui complète parfaitement notre philosophie culinaire. Lorsque vous
                    franchissez nos portes, vous êtes immédiatement accueilli et enveloppé dans un cocon d'élégance
                    contemporaine par notre maître d’hôtel, Elon Musque, où chaque élément, des lustres étincelants aux
                    finitions méticuleuses, témoigne de notre engagement à offrir le summum du luxe.</p>
            </div>
            <div class="slide">
                <img src="./img/Gerard.png" alt="Gerard de la Part Dieu">
                <p>Au-delà de cette rencontre gastronomique, Gérard de la Part Dieu, notre sommelier émérite, ajoute une
                    autre dimension à l’expérience ROMERY. Ayant sillonné les vignobles de France et d’ailleurs, Gérard
                    possède une connaissance encyclopédique des vins et sait, avec précision, comment mettre en valeur
                    chacun de nos plats à travers une sélection vinicole. Son expertise et sa passion pour les accords
                    parfaits enrichissent l'expérience culinaire et introduisent nos clients à des joyaux œnologiques
                    parfois méconnus.</p>
            </div>

            <!-- Flèches de navigation -->
            <div class="slide-nav">
                <button class="slide-prev">&#10094;</button>
                <button class="slide-next">&#10095;</button>
            </div>

            <!-- Indicateurs de slide -->
            <div class="slide-indicators"></div>
        </div>

        <div>
            <div class="logo-menu-container">
                <img class="logo-menu" src="./Images/MENU.png" alt="Logo du restaurant" />
            </div>


            <div class="cards-container">
                <div class="mealType">
                    <h2>Entrées</h2>
                    <div class="card">
                        <img class="recto" src="./Images/neugetsse.png" alt="Photo de Noeuguettes de Saint-Jacques">
                        <div class="verso">
                            <h3>Noeuguettes de Saint-Jacques</h3>
                            <div class="details">
                                <div class="description">
                                    Noeuguettes de Saint-Jacques : Coquilles Saint-Jacques délicatement hachées,
                                    enrobées d'une
                                    fine
                                    panure de panko et de
                                    zestes de citron, servies avec une émulsion de coriandre et une pointe de piment
                                    doux.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="recto" src="./Images/shooter.png" alt="Photo de Velouté de potimarron en shooter">
                        <div class="verso">
                            <h3>Velouté de potimarron en shooter</h3>
                            <div class="details">
                                <div class="description">
                                    Velouté de potimarron en shooter : Soupe onctueuse parfumée au gingembre,
                                    accompagnée de
                                    mini
                                    croûtons dorés au
                                    beurre.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="recto" src="./Images/tacoscanard.png" alt="Phot de Taquausse de magret de canard">
                        <div class="verso">
                            <h3>Taquausse de magret de canard</h3>
                            <div class="details">
                                <div class="description">
                                    Taquausse de magret de canard : Tranches de magret de canard fumé, salade roquette,
                                    compotée
                                    d'oignons rouges et
                                    fromage de chèvre dans un wrap moelleux et croustillant.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mealType">
                    <h2>Plats</h2>
                    <div class="card">
                        <img class="recto" src="./Images/bouchee.png"
                            alt="Photo Burjé élégance avec ses frites de Patate Douce au Parmesan ">
                        <div class="verso">
                            <h3>Burjé élégance </h3>
                            <div class="details">
                                <div class="description">
                                    Burjé élégance avec ses frites de Patate Douce au Parmesan : Buns briochés maison,
                                    steak de
                                    bœuf
                                    Wagyu, assaisonné avec
                                    des câpres, des échalotes françaises, du persil frais et une pointe de moutarde à
                                    l'ancienne.
                                    Frites saupoudrées de
                                    parmesan fraîchement râpé et de persil haché. Accompagnées d'un aioli à la
                                    truffe et d'une gelée de piment doux.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="recto" src="./Images/anaconda.png" alt="Photo de Kebab de Filet Mignon">
                        <div class="verso">
                            <h3>Kebab de Filet Mignon</h3>
                            <div class="details">
                                <div class="description">
                                    Kebab de Filet Mignon : Filet mignon de porc mariné dans des épices douces, grillé à
                                    la
                                    perfection, servi dans un pain maison avec une salade de chou à la crème fraîche et
                                    à
                                    l'aneth,
                                    et une touche de sauce tzatziki.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="recto" src="./Images/cavza.png" alt="Photo de Pizza au caviar ">
                        <div class="verso">
                            <h3>Pizza au caviar</h3>
                            <div class="details">
                                <div class="description">
                                    Pizza au caviar : Base crémeuse à la crème fraîche, oignons nouveaux, saumon fumé,
                                    et une
                                    généreuse portion de
                                    caviar. Finie avec un filet de citron et d'aneth.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mealType">
                    <h2>Desserts</h2>
                    <div class="card">
                        <img class="recto" src="./Images/churros.png"
                            alt="Phot de Churros au chocolat noir et fleur de sel">
                        <div class="verso">
                            <h3>Churros au chocolat noir et fleur de sel</h3>
                            <div class="details">
                                <div class="description">
                                    Churros au chocolat noir et fleur de sel : Churros croustillants saupoudrés de
                                    sucre, servis
                                    avec une sauce au
                                    chocolat noir corsé et une pincée de fleur de sel.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="recto" src="./Images/sunday.png" alt="Photo de Sundae de macaron">
                        <div class="verso">
                            <h3>Sundae de macaron</h3>
                            <div class="details">
                                <div class="description">
                                    Sundae de macaron : Glace vanille, éclats de macarons colorés, sauce caramel beurre
                                    salé et
                                    éclats de pralin.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="recto" src="./Images/tirmoidessus.png" alt="Photo de Tarte au Daim revisité">
                        <div class="verso">
                            <h3>Tarte au Daim revisité</h3>
                            <div class="details">
                                <div class="description">
                                    Tarte au Daim revisité : Base sablée croquante, une couche crémeuse de caramel au
                                    beurre
                                    salé,
                                    morceaux de Daim
                                    concassés, surmontée d'une mousse légère au chocolat et de copeaux de Daim
                                    croustillants.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mealType">
                    <h2>Vins</h2>
                    <div class="card">
                        <img class="recto" src="./Images/vinbet.png"
                            alt="Photo d'une bouteille de vin Pétillant de Betterave ">
                        <div class="verso">
                            <h3>Pétillant de Betterave </h3>
                            <div class="details">
                                <div class="description">
                                    Pétillant de Betterave : Un vin effervescent d'une teinte rosée profonde, élaboré à
                                    partir
                                    de
                                    betteraves
                                    fermentées, offrant des notes terreuses sucrées, idéal pour les entrées audacieuses.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="recto" src="./Images/vin.png"
                            alt="Photo d'une bouteille de vin Rouge Sang de Dragon  ">
                        <div class="verso">
                            <h3>Rouge Sang de Dragon </h3>
                            <div class="details">
                                <div class="description">
                                    Rouge Sang de Dragon : Un vin rouge obtenu à partir de raisins cultivés dans des
                                    sols
                                    volcaniques, possédant une
                                    teinte presque noire et des arômes fumés avec une touche minérale, parfait pour
                                    accompagner
                                    des
                                    plats robustes.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="recto" src="./Images/vincurc.png"
                            alt="Photo d'une bouteille de vin Jaune Curcuma & Gingembre ">
                        <div class="verso">
                            <h3>Jaune Curcuma & Gingembre </h3>
                            <div class="details">
                                <div class="description">
                                    Jaune Curcuma & Gingembre : Un vin blanc infusé avec du curcuma et du gingembre, lui
                                    donnant
                                    une
                                    couleur dorée et
                                    des saveurs épicées et rafraîchissantes. Idéal pour accompagner des plats exotiques
                                    ou
                                    épicés.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div>
            <!-- CONTACT -->
        </div>

    </main>



    <script src="script.js"></script>



    <!-- FORM -->


    <?php if (isset($_POST['name'])) :

      $data = array_map('trim', $_POST);

      $name = htmlentities($data['name']);
      $email = htmlentities($data['email']);
      $message = htmlentities($data['message']);

      $errors = [];

      if (empty($name)) {
        $errors[] = 'Le champ prénom doit être renseigné';
      }

      if (empty($email)) {
        $errors[] = 'Le champ email doit être renseigné';
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'l\'adresse email n\'est pas au bon format';
      }

      if (empty($message)) {
        $errors[] = 'Le champ message doit être renseigné';
      }

      if (strlen($message) < 30) {
        $errors[] = 'Le champ message doit contenir plus de 30 caractères';
      }

      if (!empty($errors)) {
        require 'error.php';
        die();
      }

    ?>

      <div class="pre_form">
      </div>
      <div>
        <div class="summary">
          <h2 id="contact"><img src="./img/CONTACT.png"></h2>
          <p>
            <img src="Images/ROMERY-BLCK.png" alt="Logo du restaurant ROMERY">
            <span></span>
          </p>

          <ul>
            <li>Votre nom : <span><?= $name; ?></span></li>
            <li>Votre email : <span><?= $email; ?></span></li>
            <li>Votre message :
              <p><?= $message; ?></p>
            </li>
          </ul>


        </div>


      </div>

    <?php endif; ?>

    <?php if (empty($_POST['name'])) : ?>
<h2 id="contact"><img src="./img/CONTACT.png"></h2>
      <form action="index.php" method="post">
        <p>Pour toute demande de réservation, veuillez s'il vous plait remplir le formulaire suivant.</p>
        
        <div>
          <label for="name">Votre nom : </label>
          <input type="text" id="name" name="name" required>
        </div>

        <div>
          <label for="email">Votre email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div>
          <label for="message">Votre message : </label>
          <textarea name="message" id="message" rows="4" minlength="30" required></textarea>
        </div>

        <div class="buttonsLine">
          <button type="submit" href="#contact">Envoyer</button>
        </div>
      </form>

    <?php endif; ?>
  </main>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1392.129271126169!2d4.826651932692711!3d45.7459625371331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ab96b2285%3A0xd07b1fb24dc8242f!2s17%20Rue%20Delandine%2C%2069002%20Lyon!5e0!3m2!1sfr!2sfr!4v1696509120459!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <script src="script.js"></script>
</body>

</html>