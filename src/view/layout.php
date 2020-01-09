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
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
