<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
  <link rel="stylesheet" href="../../public/css/main.css">
  <link rel="stylesheet" href="../../public/css/client.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body onload="cache();">
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="../../public/img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class="active"><a href="#"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li><a href="createAccount.php"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
        <li><a href="#"><i class="fas fa-exchange-alt"></i>Faire un Virement</a></li>
      </ul>
      <div class="extra_option">
        <a href="javascript:return false;" title="Changer de Langue"><i class="fas fa-language"></i></a>
        <a href="javascript:return false;" title="Afficher Aide"><i class="fas fa-question-circle"></i></a>
        <a href="javascript:return false;" title="Se Déconnecter"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <!-- ENDING : SIDEBAR -->

    <!-- STARTING : MAIN CONTENT -->
    <div class="main_content">
      <div class="header">
        <div class="next_nav">
          <!-- MENU HAUT - PARTIE GAUCHE -->
          <div class="display_header">
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation CLient</span></h2>
          </div>
          <!-- MENU HAUT - PARTIE DROITE -->
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-clock" aria-hidden="true"></i> <span class="">Time / Date</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-comments" aria-hidden="true"></i> <span class="">Support</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="">
                <i class="fas fa-user" aria-hidden="true"></i> <span class="">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
    <!-- ENDING MAIN CONTENT -->
  </div>
  <!-- ENDING CONTAINER GENERAL -->
      
    <!-- Main JS -->
    <script src="../../public/js/global.js"></script>
    <script src="../../public/js/client.js"></script>
</body>

</html>