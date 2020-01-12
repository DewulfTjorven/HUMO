<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUMO</title>
    <?php echo $css;?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <main class="container">
      <nav>
        <img class="hamburger" src="../images/icons/nav.png">
        <a href="index.php?page=index"><img class="humo--logo" src="../images/humo.png"></a>
        <a href="index.php?page=cart"><img src="../images/icons/shopping-cart.png"></a>
      </nav>
      <section class="navigation__content">
        <div class="navigation__main">
          <ul>
            <span class="text--color__red"><li><a href="#">ONZE LONGREAD</a></li></span>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ACTUA</a></li>
            <li><a href="#">HUMOR</a></li>
            <li><a href="#">TV/FILM</a></li>
            <li><a href="#">MUZIEK</a></li>
            <li><a href="#">BOEKEN</a></li>
          </ul>
        </div>
        <div class="navigation__second">
        <ul>
            <li><a href="#">VIDEO</a></li>
            <li><a href="#">TV-GIDS</a></li>
            <li><a href="#">ZOEKERTJES</a></li>
            <li><a href="#">ABBONEMENT NEMEN</a></li>
            <li><a href="#">NU IN HUMO</a></li>
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">REGISTREER</a></li>

          </ul>
        </div>
      </section>
      <?php echo $content;?>
    </main>
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
    <?php echo $js; ?>
  </body>
</html>
