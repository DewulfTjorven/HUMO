<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <?php echo $css;?>
    <link rel="stylesheet" href="https://use.typekit.net/jwj7qsq.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,300&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
      <?php if($_GET['page'] == 'home' || $_GET['page'] == 'detail' || $_GET['page'] == 'cart' || $_GET['page'] == 'login' || $_GET['page'] == 'register' || $_GET['page'] == 'overview' || $_GET['page'] == 'bevestiging') { ?>
      <section class="nav--mobile">
      <nav class="container">
        <img class="hamburger" src="../images/icons/nav.png">
        <a href="index.php?page=index"><img class="humo--logo" src="../images/humo.png"></a>
        <a href="index.php?page=cart"><img src="../images/icons/shopping-cart.png"></a>
      </nav>
      <section class="navigation__content">
        <div class="navigation__main">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ACTUA</a></li>
            <li><a href="#">HUMOR</a></li>
            <li><a href="#">TV/FILM</a></li>
            <li><a href="#">MUZIEK</a></li>
            <li><a href="#">BOEKEN</a></li>
            <span class="text--color__red"><li><a href="index.php?page=longread">ONZE LONGREAD</a></li></span>
          </ul>
        </div>
        <div class="navigation__second">
        <ul>
            <li><a href="#">Video</a></li>
            <li><a href="#">Tv-gids</a></li>
            <li><a href="#">Zoekertjes</a></li>
            <li><a href="#">Abonnement nemen</a></li>
            <li><a href="#">Nu in HUMO</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Registreer</a></li>

          </ul>
        </div>
      </section>
      </section>

      <section class="nav--desktop">
      <div class="navigation__second">
        <ul>
            <li><a href="">Video</a></li>
            <li><a href="#">Tv-gids</a></li>
            <li><a href="#">Zoekertjes</a></li>
            <li><a href="#">Abonnement nemen</a></li>
            <li><a href="#">Nu in HUMO</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Registreer</a></li>
            <span class="text--color__red"><li><a href="index.php?page=longread">ONZE LONGREAD</a></li></span>
          </ul>
        </div>
        <div class="navigation__main">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ACTUA</a></li>
            <li><a href="#">HUMOR</a></li>
            <a href="index.php?page=index"><img class="humo--logo" src="../images/humo.png"></a>
            <li><a href="#">TV/FILM</a></li>
            <li><a href="#">MUZIEK</a></li>
            <li><a href="#">BOEKEN</a></li>
          </ul>
        </div>
      </section>
            <?php } ?>

      <?php echo $content;?>
      <?php if($_GET['page'] == 'home' || $_GET['page'] == 'detail' || $_GET['page'] == 'cart' || $_GET['page'] == 'login' || $_GET['page'] == 'register' || $_GET['page'] == 'overview' || $_GET['page'] == 'bevestiging') { ?>

    <footer>
      <section class="footer__items">
          <div class="footer__nav">
            <ul>
              <li><a href="#">Privacybeleid</a></li>
              <li><a href="#">Wedstrijdreglement</a></li>
              <li><a href="#">Adverteren</a></li>
              <li><a href="#">Gebruiksvoorwaarden</a></li>
              <li><a href="#">Cookiebeleid</a></li>
              <li><a href="#">Cookie instellingen</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Colofon</a></li>
            </ul>
          </div>
          <div class="footer__social">
            <img class="hamburger" src="../images/icons/facebook.png">
            <img class="hamburger" src="../images/icons/twitter.png">
          </div>
          <div class="footer__logos">
          <img class="hamburger" src="../images/dpgmedia.png">
          <img class="hamburger" src="../images/logo-cim.png">
          <img class="hamburger" src="../images/logo-jep.jpg">
          <img class="hamburger" src="../images/logo-rvdj.jpg">
          </div>
        </section>
      </footer>
      <?php } ?>
    </main>

    <?php echo $js; ?>
    <script src="../js/validate.js"></script>
  </body>
</html>
