<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet" />
  <link rel="icon" type="image/gif" href="favicon1.png" />
  <title>ROMERY</title>
</head>

<body>
  <header>
    <nav id="nav" class="">
      <h3><a href="index.html"><img src="./img/logo_test-removebg.png"></a></h3>
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
          innovante, une symbiose audacieuse entre le dynamisme du fast food et la finesse de la haute gastronomie
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