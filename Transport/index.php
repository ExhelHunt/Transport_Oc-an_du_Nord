<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Urbain Océan du Nord Congo</title>
    <link rel="stylesheet" href="./Asset/CSS/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<!-- Bouton retour en haut -->
<body>
  <header>
      <div class="header-container">
          <div class="logo">
              <a href="./index.php">
                  <img src="./Asset/IMAGES/photo_2025-05-22_16-34-59.jpg" alt="Logo Océan du Nord" loading="lazy">
                  <!-- <h6>OCEAN DU NORD</h6> -->
              </a>
          </div>
          <nav class="navbar">
              <ul class="nav-list">
                  <li><a href="index.php" class="active"><span>Accueil</span></a></li>
                  <li><a href="ligne.php"><span>Lignes & Horaires</span></a></li>
                  <li><a href="itineraire.php"><span>Itinéraires & Tarifs</span></a></li>
                  <li><a href="service.php"><span>Services</span></a></li>
                  <li><a href="contact.php"><span>Contact</span></a></li>
              </ul>
          </nav>
          <div class="espace-client">
              <a href="./espace-client.php"><span>Espace Client</span></a>
          </div>
      </div>
      <div class="header-bottom-line">
          <div class="left">
              <i></i>
              <marquee><span>Annonces</span> : Aucunes perturbations sur les lignes de transport</marquee>
          </div>
          <a href="#" id="plus">En savoir plus</a>
      </div>

      <!-- bannière du site -->
      <div class="banniere">
          <div class="banniere-text">
              <h1>Voyagez <span id="jaune">facilement</span> dans <br>l'ensemble du pays</h1>
              <p>Découvrez notre réseau de transport public moderne et <br>accessible. Planifiez vos trajets, consultez les horaires et achetez <br>vos tickets en quelques clics.</p>

              <div class="btn-link">
                  <a href="itinéraire.php" class="btn" id="btn1">Rechercher un itinéraire</a>
                  <a href="horaires.php" class="btn" id="btn2">Consulter les horaires</a>
              </div>
          </div>
      </div>
  </header>

  <main>
    <div class="floating-cards">
      <div class="card">
        <div class="card-icon"><i class="fas fa-location-dot"></i></div>
        <h3>Recherche d'itinéraire</h3>
        <p>Trouvez le meilleur chemin pour vous rendre à destination en quelques clics.</p>
        <a href="#">Planifier mon trajet <span>&rarr;</span></a>
      </div>
      <div class="card">
        <div class="card-icon"><i class="fas fa-clock"></i></div>
        <h3>Horaires en temps réel</h3>
        <p>Consultez les horaires de passage en temps réel pour toutes nos lignes.</p>
        <a href="#">Voir les horaires <span>&rarr;</span></a>
      </div>
      <div class="card">
        <div class="card-icon"><i class="fas fa-ticket"></i></div>
        <h3>Tarifs et abonnements</h3>
        <p>Découvrez nos offres et choisissez la formule adaptée à vos besoins.</p>
        <a href="#">Consulter les tarifs <span>&rarr;</span></a>
      </div>
    </div>
  
    <!-- première section de l'accueil: Section A propos -->
    <section class="Apropos">
      <div class="container">
          <div class="row">
              <div class="title">
                  <h4>A propos de Océan du Nord</h4>
                  <p>
                      Océan du Nord est une société de transport interurbain basée à Brazzaville, en République du Congo. Depuis plus de deux décennies, elle s’est imposée comme un acteur majeur du transport routier national, reliant efficacement les principales villes du pays grâce à un réseau étendu et une flotte adaptée aux longues distances.
                  </p>
              </div>
              <div class="apropos-content">
                <img src="./Asset/IMAGES/Ocean_du_Nord_Bus.jpg" alt="Bus Océan du Nord" loading="lazy">
                  
                <div class="apropos-infos-grid">
                    <div class="apropos-item">
                        <i class="fas fa-bus"></i>
                        <span>Flotte moderne et confortable</span>
                    </div>
                    <div class="apropos-item">
                        <i class="fas fa-route"></i>
                        <span>Réseau couvrant tout le pays</span>
                    </div>
                    <div class="apropos-item">
                        <i class="fas fa-users"></i>
                        <span>Plus de 25 ans d'expérience</span>
                    </div>
                    <div class="apropos-item">
                        <i class="fas fa-award"></i>
                        <span>Service client reconnu</span>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </section>
    <!-- End section1 -->

    <!-- Seconde section de l'accueil: Section Itinéraire -->
    <section class="itineraire">
      <div class="container">
        <div class="titre">
          <h4>Recherche d'itinéraire</h4>
          <p>Planifiez votre trajet en quelque clics et trouvez le meilleur itinéraire pour vous déplacer dans <br>la ville ou sur l'ensemble du territoire</p>
        </div>
        <div class="formulaire-itineraire">
          <form action="itineraire.php">
            <div class="flex">
              <div class="depart">
                <label for="depart">Départ</label><br>
                <div class="depart-input">
                  <i></i>
                  <input type="text" name="depart" placeholder="Départ" required>
                </div>
              </div>
              <div class="destination">
                <label for="destination">Destination</label><br>
                <div class="destination-input">
                  <i></i>
                  <input type="text" name="destination" placeholder="destination" required>
                </div>
              </div>
            </div>
            
            <div class="flex2">
              <div class="date">
                <label for="date">Date</label><br>
                <div class="date-input">
                  <i></i>
                  <input type="date" name="date" placeholder="date de départ" required>
                </div>
              </div>
              <div class="heure">
                <label for="heure">heure</label><br>
                <div class="heure-input">
                  <i></i>
                  <input type="time" name="heure" placeholder="heure" required>
                </div>
              </div>
            </div>

            <!-- <select name="select-custum" id="selection">
              <option value=""></option>
            </select> -->
            <div class="rechercher">
              <input type="submit" id='Rechercher' value="Rechercher">
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- End section2 -->

    <!-- Troisième section de l'accueil: Section Services -->
    <section class="services">
      <!-- Start contaiiner -->
      <div class="container">

        <!-- Start titre -->
        <div class="titre">
          <h4>Nos services</h4>
          <p>Découvrez les services que nous proposons pour améliorer votre expérience de transport</p>
        </div>
        <!-- End titre -->

        <!-- Start services-blocks -->
        <div class="services-blocks">

          <div class="services-block" id="courrier">
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <h5>Service de courrier</h5>
            <p>Envoyez et recevez vos colis en toute sécurité grâce à notre service de courrier intégré.</p>
            <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="services-block" id="fret">
            <div class="icon">
              <i class="fas fa-box"></i>
            </div>
            <h5>Service de fret</h5>
            <p>Transportez vos marchandises en toute sécurité grâce à notre service de fret dédié.</p>
            <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
          </div>

          <div class="services-block" id="location">
            <div class="icon">
              <i class="fas fa-car"></i>
            </div>
            <h5>Service de location</h5>
            <p>Louez un bus pour vos déplacements en toute simplicité grâce à notre service de location.</p>
            <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
          </div>

        </div>
        <!-- End services-blocks -->

      </div>
      <!-- End container -->

    </section>
    <!-- End section3 -->

    <!-- Quatrième section de l'accueil: Section Tarifs -->
    <section class="tarif">
      <!-- Start container -->
      <div class="container">
        <div class="titre">
          <h4>Tarifs et abonnements</h4>
          <p>Découvrez nos offres et choisissez la formule adaptée à vos besoins</p>
        </div>
        
        
        <!-- Start block -->
        <div class="blocks">
          <div class="block" id="block1">
            <div class="entete">
              <h4>Ticket Unitaire</h4>
              <p>1,80 €<span>/ trajet</span></p>
            </div>
            <ul>
              <div><i class="ri-check-line"></i><li>Valable 1 heure après validation</li></div>
              <div><i class="ri-check-line"></i><li>Correspondance illimitée</li></div>
              <div><i class="ri-check-line"></i><li>Disponible à bord des bus</li></div>
            </ul>

            <button>Acheter</button>
          </div>
          <div class="block" id="block2">
            <div class="entete">
              <div class="etiquette">
                <h4>Carnet 10 tickets</h4>
                <p id="etiquette">-17%</p>
              </div>
              <p>15,00 €<span>/trajet</span></p>
            </div>
            <ul>
              <div><i class="ri-check-line"></i><li>1,50 €/ticket</li></div>
              <div><i class="ri-check-line"></i><li>Valable 1 heure après validation</li></div>
              <div><i class="ri-check-line"></i><li>Disponible en agence et points de vente</li></div>
            </ul>

            <button>Acheter</button>
          </div>
          <div class="block" id="block3">
            <div id="populaire">
              <div id="vide"></div>
              <p>Populaire</p>
            </div>
            <div class="entete">
              <div class="etiquette">
                <h4>Abonnement mensuel</h4>
              </div>
              <p>15,00 €<span>/trajet</span></p>
            </div>
            <ul>
              <div><i class="ri-check-line"></i><li>1,50 €/ticket</li></div>
              <div><i class="ri-check-line"></i><li>Valable 1 heure après validation</li></div>
              <div><i class="ri-check-line"></i><li>Disponible en agence et points de vente</li></div>
            </ul>

            <button type="submit"><span>S'abonner</span></button>
          </div>
        </div>
        <!-- End block -->

        <!-- Start tarif-reduis -->
        <div class="tarif-reduits">

          <!-- Start entete -->
          <div class="entete">
            <h4>Tarifs spéciaux et réductions</h4>
          </div>
          <!-- End entete -->

          <!-- Start block-tarif-abonnement -->
          <div class="block-tarif-abonnement">

            <!-- Start block1 -->
            <div class="block" id="block-left">
              <h6>Tarifs réduits</h6>

              <!-- Start formules -->
              <div class="formules">
                <!-- formule1 -->
                <div class="formule">
                  <div class="left">
                    <h6>Jeune (-26 ans)</h6>
                    <p>Sur présentation d'un justificatif</p>
                  </div>
                  <p>-50%</p>
                </div>
                <!-- End formule1 -->
                  
                <!-- Formule2 -->
                <div class="formule">
                  <div class="left">
                    <h6>Senior (+65 ans)</h6>
                    <p>Sur présentation d'un justificatif</p>
                  </div>
                  <p>-50%</p>
                </div>
                <!-- End formule2 -->
                  
                <!-- formule3 -->
                <div class="formule">
                  <div class="left">
                    <h6>Demandeurs d'emploi</h6>
                    <p>Sur présentation d'un justificatif</p>
                  </div>
                  <p>-50%</p>
                </div>
                <!-- End formule3 -->

              </div>
              <!-- End formules -->
                
            </div>
            <!-- End block1 -->

            <!-- Start block2 -->
            <div class="block" id="block-right">
              <h6>Abonnements spéciaux</h6>

              <!-- Start formules -->
              <div class="formules">
                <!-- formule1 -->
                <div class="formule">
                  <div class="left">
                    <h6>Abonnement annuel</h6>
                    <p>Engagement 12 mois</p>
                  </div>
                  <p>420,00 €</p>
                </div>
                <!-- End formule1 -->
                  
                <!-- Formule2 -->
                <div class="formule">
                  <div class="left">
                    <h6>Pass famille</h6>
                    <p>2 adultes + Enfant</p>
                  </div>
                  <p>80,00 €/mois</p>
                </div>
                <!-- End formule2 -->
                  
                <!-- formule3 -->
                <div class="formule">
                  <div class="left">
                    <h6>Pass entreprise</h6>
                    <p>Pour les salariés</p>
                  </div>
                  <p>Sur devis</p>
                </div>
                <!-- End formule3 -->

              </div>
              <!-- End formules -->
                
            </div>
            <!-- End block2 -->

          </div>
          <!-- End block-tarif-abonnement -->

        </div>
        <!-- End tarif-reduis -->
        
      </div>
    </section>
    <!-- End section4 -->

    <!-- Cinquième section de l'accueil: Section Contact -->
    <section class="contact">
      <div class="container">
        <div class="titre">
          <h4>Contactez-nous</h4>
          <p>Une question, une suggestion ou une réclamation ? N'hésitez pas à nous contacter via le formulaire ci-dessous.</p>
        </div>
        <div class="form-contact">
          <!-- Start formulaire -->
           <div class="formulaire">
            <h5>Formulaire de contact</h5>
            <form action="contact.php" method="post">
              <div class="flex">
                <div class="input-group">
                  <label for="nom">Nom*</label>
                  <input type="text" id="nom" name="nom" required>
                </div>
                <div class="input-group">
                  <label for="prenom">Prénom*</label>
                  <input type="text" id="prenom" name="prenom" required>
                </div>
              </div>
              <div class="input-group">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="input-group">
                <label for="objet">Objet*</label>
                <select id="objet" name="objet" required>
                  <option disabled value="">Sélectionnez un objet</option>
                  <option value="question">Question</option>
                  <option value="suggestion">Suggestion</option>
                  <option value="reclamation">Réclamation</option>
                </select>
              </div>
              <div class="input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
              </div>
              <button type="submit">Envoyer</button>
            </form>
           </div>
          <!-- End formulaire -->

          <!-- Start right -->
          <div class="right">

          <!-- start infos -->
            <div class="infos">
              <h5>Informations de contact</h5>
              <ul class="list" id="contact-list">
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="info" id="info1">
                    <h6>Adresse</h6>
                    <p>12 avenue de la République, Brazzaville</p>
                  </div> 
                </li>
                <li>
                  <i class="fas fa-envelope"></i>
                  <div class="info" id="info2">
                    <h6>Email</h6>
                    <p>contact@transbus.com</p>
                  </div>
                </li>
                <li>
                  <i class="fas fa-phone"></i>
                  <div class="info" id="info3">
                    <h6>Téléphone</h6>
                    <p>+242 06 123 45 67</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End infos -->

            <!-- Start agences -->
            <div class="agences">
              <h5>Nos agences</h5>
              <ul class="list" id="agences-list">
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <div id="agence1">
                    <h6>Agence Centrale</h6>
                    <p>12 avenue de la République, <br>Brazzaville</p>
                  </div>
                </li>
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <div id="agence2">
                    <h6>Agence Pointe-Noire</h6>
                    <p>34 boulevard de la Liberté, <br>Pointe-Noire</p>
                  </div>
                </li>
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <div id="agence3">
                    <h6>Agence Dolisie</h6>
                    <p>56 avenue du 30 Juin, <br>Dolisie</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End agences -->

          </div>
          <!-- End right -->

        </div>

      </div>
    </section>
    <!-- End section5 -->

    <!-- Sixième Section de l'accueil: Section Foire Aux Questions -->
    <section class="FoireAuxQuestions">
      <div class="container">
        <h2>Foire Aux Questions</h2>
        <p>Vous avez des questions ? Consultez notre FAQ pour trouver les réponses aux questions les plus fréquentes.
        Si vous ne trouvez pas <br>la réponse à votre question, n'hésitez pas à nous contacter via le formulaire de contact.</p>
        
        <div class="faq">
          <button class="faq-question">
            Question 1
            <span class="faq-arrow">&#9654;</span>
          </button>
          <div class="faq-answer">
            Réponse à la question 1.
          </div>
        </div>
        <div class="faq">
          <button class="faq-question">
            Question 2
            <span class="faq-arrow">&#9654;</span>
          </button>
          <div class="faq-answer">
            Réponse à la question 2.
          </div>
        </div>
        <div class="faq">
          <button class="faq-question">
            Question 3
            <span class="faq-arrow">&#9654;</span>
          </button>
          <div class="faq-answer">
            Réponse à la question 3.
          </div>
        </div>
        <div class="faq">
          <button class="faq-question">
            Question 4
            <span class="faq-arrow">&#9654;</span>
          </button>
          <div class="faq-answer">
            Réponse à la question 4.
          </div>
        </div>
        <div class="faq">
          <button class="faq-question">
            Question 5
            <span class="faq-arrow">&#9654;</span>
          </button>
          <div class="faq-answer">
            Réponse à la question 5.
          </div>
        </div>
      </div>
    </section>
    <!-- End section6 -->

    <!-- Septième Section de l'accueil: Section Newsletter -->
    <section class="newsletter">
      <div class="container">
        <h2>Inscrivez-vous à notre newsletter</h2>
        <p>Recevez les dernières actualités, offres et informations sur nos services directement dans votre boîte mail.</p>
        <form action="newsletter.php" method="post">
          <input type="email" name="email" placeholder="Votre email" required>
          <button type="submit">S'inscrire</button>
        </form>
      </div>
    </section>
    <!-- End section7 -->


  </main>

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