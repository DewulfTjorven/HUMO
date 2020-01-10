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
        <img class="humo--logo" src="../images/humo.png">
        <img src="../images/icons/shopping-cart.png">
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
    <?php echo $js; ?>
  </body>
</html>
