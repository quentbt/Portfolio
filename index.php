<?php

$bdd = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '') or die('connection failed');

if (isset($_POST['envoyer'])) {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $msg = $_POST['message'];
   $adresse = "quentinbuet4@gmail.com";

   mail($adresse, $name, $msg);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quentin Buet Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- lightcase -->
   <link href="css/lightcase.css" rel="stylesheet" />

   <!-- jquery -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src=" https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

   <!-- lightcase -->
   <script src="js/lightcase.js"></script>
</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>

      <div class="follow">
         <!-- <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-github"></a> -->
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img src="images/3723.jpg" alt="">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">Bonjour, je suis Quentin</h3>
         <span data-aos="fade-up">développeur full stack</span>
         <p data-aos="fade-up">Je suis un étudiant en informatique à l'école H3Hitema</p>
         <a data-aos="fade-up" href="#about" class="btn">A propos de moi</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biographie</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">Je m'appelle Quentin Buet, j'ai 21 ans et je suis en 2e année de BTS. J'aime les jeux-vidéos, les mangas, le sport (basket et salle)</p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>nom : </span> Buet Quentin </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> quentinbuet4@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>adresse : </span> Paris, France </h3>
            <h3 data-aos="zoom-in"> <span>téléphone : </span> +33 6 27 60 69 23 </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 21 ans </h3>
            <!-- <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3> -->
         </div>

         <a href="CV/CV_QUENTIN_BUET.pdf" data-rel="lightcase" class="btn" data-aos="fade-up"> Voir CV </a>

      </div>

      <div class="skills" data-aos="fade-up">

         <h1 class="heading"> <span>Compétences</span> </h1>

         <h2>Voici les langages que nous avons étudiés durant notre cursus BTS</h2>

         <div class="spe">
            <div class="progress">
               <div class="frontend">
                  <h2>Langages FrontEnd</h2>
                  <div class="bar" data-aos="fade-left">
                     <h3><span>HTML</span></h3>
                  </div>
                  <div class="bar" data-aos="fade-right">
                     <h3><span>CSS</span></h3>
                  </div>
               </div>
               <!-- <div class="bar" data-aos="fade-left">
                  <h3><span>JavaScript</span> <span>65%</span></h3>
               </div> -->
               <div class="backend">
                  <h2>Langages BackEnd</h2>
                  <div class="bar" data-aos="fade-right">
                     <h3><span>PHP</span></h3>
                  </div>
                  <div class="bar" data-aos="fade-right">
                     <h3><span>SQL</span></h3>
                  </div>
                  <div class="bar" data-aos="fade-right">
                     <h3><span>Python</span></h3>
                  </div>
                  <div class="bar" data-aos="fade-right">
                     <h3><span>Java</span></h3>
                  </div>
               </div>
            </div>
         </div>



      </div>

      <div class="edu-exp">

         <h1 class="heading" data-aos="fade-up"> <span>education & experiences</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">education</h3>

               <div class="box" data-aos="fade-right">
                  <span>( 2021 - 2023 )</span>
                  <h3>BTS SIO SLAM</h3>
                  <p>Je passe mon BTS à H3HITEMA, Issy-Les-Moulineaux.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2020- 2021 )</span>
                  <h3>1 an en Prepa</h3>
                  <p>J'ai fait un an de prepa à épita dans laquelle j'ai appris le C#.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2019 - 2020 )</span>
                  <h3>BAC STI2D</h3>
                  <p>J'ai passé un bac STI2D dans le lycée Fresnel, dans Paris 15.</p>
               </div>

            </div>

            <div class="box-container">

               <h3 class="title" data-aos="fade-left">experiences</h3>

               <div class="box" data-aos="fade-left">
                  <span>( 2021 - 2022 )</span>
                  <h3>Stage</h3>
                  <p>J'ai effectué un deuxième stage à Transtec International dans lequel j'ai dût créer une fiche client SAV pour que le chef puisse gérer directement les factures et les problèmes en cas de retour</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2021 - 2022 )</span>
                  <h3>Stage</h3>
                  <p>J'ai effectué mon stage de 1ere année dans l'entreprise MorsAngeles, nôtre travail consistait en la refonte d'un site web.</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2019 - 2021 - 2022 )</span>
                  <h3>Job d'été</h3>
                  <p>Les étés je travaille en tant que maçon en Bretagne dans l'entreprise Maison Demeurance les mois de juillet.</p>
               </div>
            </div>

         </div>

      </div>

   </section>


   <!-- portfolio section starts  -->

   <section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>projets</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/unnamed.jpg" alt="">
            <h3>discographie Dua Lipa</h3>
            <p>Nous avons réaliser un site statique sur Dua Lipa, sur lequel nous avons présenter l'artiste et ses albums.</p>
            <span>( 2021 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/8-reseaux-sociaux-plus-utiles-immobilier.jpeg" alt="">
            <h3>BDD réseau social</h3>
            <p>Dans ce projet, nous avons créé et testé une base de donnée pour un réseau social</p>
            <span>( 2021 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/Les-meilleures-agences-de-voyage-à-Paris.jpg" alt="">
            <h3>jetlag</h3>
            <p>Pour ce projet, nous avons créer un site dynamique d'agence de voyage</p>
            <span>( 2021 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/location-voiture-pas-cher.jpg" alt="">
            <h3>location de voiture</h3>
            <p>Nous avons fait un site dynamique d'agence de location de voiture</p>
            <span>( 2022 - 2023 )</span>
         </div>

         <!-- <div class="box" data-aos="zoom-in">
            <img src="images/img-5.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div> -->

         <div class="box" data-aos="zoom-in">
            <img src="images/Android-logo.jpg" alt="">
            <h3>Application Android</h3>
            <p>Nous avons créé une application android qui simule une gestion de cabinet médical</p>
            <span>( 2022 - 2023 )</span>
         </div>

      </div>

   </section>

   <!-- portfolio section ends -->

   <section style="justify-content: center; align-items: center;">
      <h1 class="heading" data-aos="fade-up"><span> Veille Technologique </span></h1>
      <h2 class="title2"> WEB 3.0 </h2>

      <h3 class="title3"> Qu'est ce que le WEB 3.0 ? </h3>
      <p class="veille"> Le WEB 3.0 (ou web3) sera la nouvelle génération du WEB, elle succedera le WEB 1.0 et le WEB 2.0. Il sagit d'un web où tous les utilisateurs sont connéctés par des blockchains. Il se base sur un concept de liberté, ou tout les utilisateurs seraient affranchis des grandes entreprises.</p>

      <br>

      <h3 class="title3">Qu'est ce que la blockChain ?</h3>
      <p class="veille">La blockChain est une technologie de stockage et de transmition de l'information le tout sans organisme central de contrôle, cela permet la décentralisation. Pour faire simple, elle permet aux utilisateurs connectés de pouvoir partager des données sans intermediaire. On pourrait la comparer à une enorme BDD </p>

      <br>

      <h3 class="title3">Comment marche la blockChain ?</h3>
      <p class="veille"> En pratique, la blockChain est une base de donnée qui contient l'historique de tous les échanges effectués entre les utilisateurs. Les principales caractéristiques pourrait être défini par :</p>

   </section>

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contactez moi </span> </h1>

      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="votre nom" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="votre email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="votre number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="votre message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="envoyer" name="envoyer" class="btn">
      </form>

   </section>

   <!-- contact section ends -->

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

   <script type="text/javascript">
      $('a[data-rel^=lightcase]').lightcase({
         iframe: {
            allowfullscreen: 1
         }
      });
   </script>

   <script type="text/javascript">
      jQuery(document).ready(function($) {
         $('a[data-rel^=lightcase]').lightcase();
      });
   </script>


</body>

</html>