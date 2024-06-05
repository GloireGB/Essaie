<?php
  session_start() ;
?>
<!DOCTYPE html>
<html lang="FR">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="all.css">
      <link rel="stylesheet" href="fontawesome.min.css">
      <link rel="stylesheet" href="bulma.css">
      <link rel="stylesheet" href="Style.css">
      <link rel="stylesheet" href="bootstrap.css">
      
        <title>ACCUEIL ACCO</title>
  </head>
    <style>
      
    </style>
  <body>
  
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="navbar-item"> 
          <button>
            <h3>ASSOCIATION DES CHAUFFEURS DU CONGO</h3>
          </button>
        </div>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item">
          <span class="icon-text">
            <span class="icon">
              <i class="fas fa-home"></i>
            </span>
            <span>Accueil</span>
          </span>
          </a>

          <a class="navbar-item">
            A PROPOS
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              PLUS
            </a>

            <div class="navbar-dropdown">
        
              <a href="#foot" class="navbar-item">
                CONTACTS
              </a>
              <hr class="navbar-divider">
              <a href = "#message" class="navbar-item">
                SIGNALER...
              </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <!--a class="button is-light">
                <strong>A PROPOS</strong>
              </a-->
              <a class="button is-primary"
              href ="CONNEXION.php"> <strong>Log in</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

      <section class="banner d-flex justify-content-center align-items-center pt-5">
        <div class="container my-5 py-5">
          <div class="row">
            <div class="col-md-6"></div>
              <div class="col-md-6">
                <h2 class="text-capitlize py-3 Autography banner-desc">
                  Association des Chauffeurs du Congo ...
                </h2>
              </div>
          </div>
        </div>
      </section><br><br>


      <section class="available merriweather-py-5">
        <div class="container">
          <div class="row">
            <div class="card mb-3 border-0 rounded-0">
              <div class="row">
                <div class="col-md-6">
                  <img src="../FEUILLE/IMAGES/IMG_2.jpg" class="img-fluid" alt="acco">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title">Le confort et le respect ... </h5>
                    <p class="card-text">
                      Le confort ne se limite pas seulement au siège et à l'environnement physique. 
                      L'espace généreux permet de s'installer confortablement, sans être les uns sur les autres. 
                      Le calme ambiant procure une sensation apaisante, offrant un moment de répit bienvenu dans 
                      un quotidien souvent mouvementé. Que l'on soit seul ou en groupe, le transport en commun 
                      devient un espace privilégié où l'on peut se ressourcer, lire, rêver ou simplement observer 
                      le paysage défiler par la fenêtre.
                    </p>
                    <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                  </div>
                </div>
              </div>
            </div><br><br>
            <div class="card my-5 border-0 rounded-0">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title">Rouler en toute sécurité</h5>
                    <p class="card-text">
                      La sécurité sur la route est un enjeu primordial auquel nous devons tous
                      accorder la plus grande attention. Que l'on soit conducteur, passager ou piéton, 
                      nous avons la responsabilité de respecter les règles de circulation afin de 
                      préserver notre intégrité physique et celle des autres usagers de la route.
                      Lorsque l'on prend le volant, la vigilance est de mise. Il est essentiel de rester concentré, 
                      d'anticiper les situations potentiellement dangereuses et d'adapter sa conduite en conséquence. 
                      Le respect des limitations de vitesse, le port de la ceinture de sécurité et l'absence d'alcool 
                      ou de drogue sont autant de gestes simples mais cruciaux pour garantir notre sécurité.

                    </p>
                    <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../FEUILLE/IMAGES/IMG_51.JPG" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../FEUILLE/IMAGES/IMG_4.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../FEUILLE/IMAGES/IMG_61.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card my-5 border-0 rounded-0">
            <div class="row">
              <div class="col-md-6">
                <img src="../FEUILLE/IMAGES/IMG_101.jpg" class="img-fluid" alt="notre belle cuisine">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">Nous ne sommes pas nombreux, mais nous sommes partout ...</h5>
                  <p class="card-text">
                    Quel honneur pour notre société de pouvoir célébrer les transports en commun, 
                    véritables piliers de notre système de mobilité ! En mettant en avant ce mode 
                    de déplacement écologique, accessible et confortable, vous démontrez votre engagement 
                    en faveur d'un avenir plus durable et plus équitable pour tous.
                    Votre vision avant-gardiste de la mobilité urbaine est véritablement inspirante. 
                    En favorisant les transports en commun, vous offrez à chacun la possibilité de se 
                    déplacer de manière pratique et abordable, tout en réduisant significativement 
                    l'empreinte carbone de notre région. Cet investissement dans des infrastructures 
                    de qualité témoigne de votre souci constant d'améliorer le cadre de vie de nos concitoyens.
                  </p>
                    <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins ago</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cc-menu py-5 merriweather">
        <div class="container">
          <div class="row">
            <h3 class="text-center text-light merriweather">NOS ACTIONS</h3>
            <div class="card bg-transparent text-center mb-4">
              <div class="card-header redressed fs-4">
                <ul class="nav nav-tabs justify-content-center card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="true">Les chauffeurs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light">Région</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light">Une proposition ?</a>
                  </li>
                </ul>
              </div>
              <div class="card-body text-light">
                <h5 class="card-title">Ce n'est pas fini ...</h5>
                <p class="card-text">Votre visite nous prouve un grand amour, alors laissez-vous surprendre ... !</p>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card">
                <img src="../FEUILLE/IMAGES/IMG_3.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><em>Le genre à l'A.C.CO</em></h5>
                  <p class="card-text">Dans l'A.C.CO, le respect de genre est très respecté. Touvez des dames qui font mieux que des hommes car la connaissance exclut le genre...</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../FEUILLE/IMAGES/IMG_5.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aspect marketing</h5>
                  <p class="card-text">Nos matériels roulants sont mis à votre disposition pour la publicité et la vulgarisation de votre organisation.</p>
                </div>
              </div>
            </div>
            <div class="col d-sn-none d-md-block">
              <div class="card">
                <img src="../FEUILLE/IMAGES/IMG_8.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Heures de travail</h5>
                  <p class="card-text">Par ce que vous êtes rois et reines, trouvez nos taxis partout et 24h/24 dans tout le pays, milieux rural et urbain .</p>
                </div>
              </div>
            </div>
            <div class="col d-sn-none d-md-block">
              <div class="card">
                <img src="../FEUILLE/IMAGES/IMG_10.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">L'expérience à votre service</h5>
                  <p class="card-text">Trouvez des chauffeurs très expérimentés pour vos courses transurbains ou autres, ils sont à votre disposition...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        <section class="order-form py-5">
        <form action="CONFIGMESSAGE.php" method="POST">

          <div class="container">
            <h2 id = "message" class="h merriweather text-center text-light mb-4">Laissez-nous un message</h2>
            <div class="field">


          <div class="field">
            <label class="label">Votre Nom, Post-nom et Prénom</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="text" name="Nom" placeholder="votre nom complet" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Numéro de téléphone ou Adresse mail</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-danger" type="text" name="Contacts" placeholder="adresse mail ou numéro de téléphone opérationnel" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
          </div>

        
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" name="Messages" placeholder="écrivez votre message et nous essaierons de vous répondre le plutôt possible; sans oublier de signaler votre province/ville/commune"></textarea>
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Envoyer</button>
            </div>
            </form>
            <div class="control">
            <a href="ACCUEIL.php">
              <button type="button" onclick="resetForm()" class="button is-link is-light">Annuler</button>
            </a>
              
            </div>
          </div>
      </section>

      <br><br>

      <section id="foot" class="footer">
        <footer>
          <h2>Nos Contacts :</h2>

          Phone : +243 970 929 629</br>
          <button class="ui circular facebook icon button">
      <i class="facebook icon"></i>
    </button>
    <button class="ui circular twitter icon button">
      <i class="twitter icon"></i>
    </button>
    <button class="ui circular linkedin icon button">
      <i class="linkedin icon"></i>
    </button>
    <button class="ui circular google plus icon button">
      <i class="google plus icon"></i>
    </button>


        <p>@Copyright 2024 ACCO</p>
      </footer>
      </section>
  </body>
</html> 