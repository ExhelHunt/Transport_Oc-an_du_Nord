<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Asset/CSS/style1.css">
    <link rel="stylesheet" href="./Asset/CSS/espace-client.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Espace Client</title>
</head>
<body>
    <div class="main-layout">
        <!-- barre latérale de navigation (menu et info client à gauche) -->
        <div class="navigation-left">
            <!-- start container -->
            <div class="container">
                <!-- start info-client -->
                <div class="info-client">
                    <input type="image" src="./Asset/IMAGES/Chalet.jpg" alt="Photo de profil" style="border-radius: 50%; width: 100px; height: 60px;">

                    <!-- start info-client_right -->
                    <div class="info-client-right">
                        <h2>Jean Dupont</h2>
                        <p>jean.dupont@example.com</p>
                    </div>
                    <!-- end info-client_right -->
                </div>
                <!-- end info-client -->

                <!-- start menu -->
                <div class="navbar2">
                    <ul class="navbar-list2">
                        <li><i class="fas fa-user"></i><a href="#profile">Profil</a></li>
                        <li><i class="fas fa-concierge-bell"></i><a href="#services">Services</a></li>
                        <li><i class="fas fa-route"></i><a href="#invoices">Planifier mon voyage</a></li>
                        <li><i class="fas fa-history"></i><a href="#support">Historique</a></li>
                        <li><i class="fas fa-comments"></i><a href="#contact">Contact</a></li>
                        <li><i class="fas fa-sign-out-alt"></i><a href="#logout">Déconnexion</a></li>
                    </ul>
                </div>
                <!-- end menu -->

                <!-- Start parametres et aide -->
                 <div class="parametres">
                    <ul class="parametres-list">
                        <li><i class="fas fa-cog"></i><a href="#settings">Paramètres</a></li>
                        <li><i class="fas fa-question-circle"></i><a href="#help">FAQ</a></li>
                    </ul>
                 </div>
                <!-- End parametres et aide -->
            </div>
            <!-- End container -->
        </div>
        <!-- End navigation-left -->

        <!-- Start main -->
        <main>
            <div class="logo">
                <h2>Espace Client</h2>
                <img src="./Asset/IMAGES/photo_2025-05-22_16-34-59.jpg" alt="Logo de l'entreprise" style="width: 150px; height: auto;" class="logo-image-a-droite">
            </div>

            <div class="container">

                <!-- Start section1 -->
                <section class="section1">
                    <div class="container">
                        <div class="title">
                            <h2>Bienvenue, Jean Dupont</h2>
                            <p>Voici un aperçu de vos informations et services disponibles.</p>
                        </div>

                        <div class="grille-info-liens-dans-image">
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 1">
                                <p>Information 1</p>
                            </div>
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 2">
                                <p>Information 2</p>
                            </div>
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 3">
                                <p>Information 3</p>
                            </div>
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 4">
                                <p>Information 4</p>
                            </div>
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 5">
                                <p>Information 5</p>
                            </div>
                            <div class="info-lien">
                                <img src="https://via.placeholder.com/100" alt="Info 6">
                                <p>Information 6</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End section1 -->

                <!-- Start service et maintenance -->
                <section class="service-et-maintenance">
                    <div class="container">
                        <i class="fas fa-concierge-bell"></i>
                        <h3>Aucune maintenance planifiée, tout va bien!</h3>
                    </div>
                </section>
                <!-- End service et maintenance -->
                
            </div>
        </main>
        <!-- End main -->
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-cols">
          <div class="footer-col">
            <div class="logo"><img src="./Asset/IMAGES/photo_2025-05-22_16-34-59.jpg" alt="Logo de Ocean du Nord"></div>
            <div class="footer-social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
          <div class="footer-col">
            <h5>Lignes rapides</h5>
            <ul>
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Lignes & Horaires</a></li>
              <li><a href="#">Tarifs</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h5>Informations</h5>
            <ul>
              <li><a href="#">Plan du réseau</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Mentions légales</a></li>
              <li><a href="#">CGU</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h5>Contact</h5>
            <ul>
              <li>12 avenue de la République, Brazzaville</li>
              <li>contact@transbus.com</li>
              <li>+242 06 123 45 67</li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <span>© 2025 TransBus, tous droits réservés.</span>
          <span>
            <a href="#">Politique de confidentialité</a> ·
            <a href="#">Cookies</a>
          </span>
          <button id="back-to-top" class="back-to-top">
            <i class="fas fa-arrow-up"></i>
          </button>
        </div>
      </div>
  </footer>
  <!-- End footer -->

  <script src="./Asset/JS/script.js"></script>

</body>
</html>
