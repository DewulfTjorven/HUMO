<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>

<section class="details">
  <h2 class="details__name"><?php echo $flancer['firstname'] . " " . $flancer['lastname']; ?></h2><br>
  <img class="details__image padding--bottom" src="../images/<?php echo $flancer["image-big"] ?>" width="300" alt="<?php echo $flancer["firstname"] ?>">
  <p class="details__title"><?php echo $flancer['bio']; ?></p><br>
  <p class="details__title">Location: <?php echo $flancer['location']; ?> km from you</p><br>
  <p class="details__title">Worktype: <?php echo $flancer['worktype']; ?></p><br>
  <p class="details__title padding--bottom">This Freelancer got recommended <?php echo $flancer['recommendations']; ?> times</p><br>
  <a href="index.php?page=job" class="button-blue">Hire <?php echo $flancer['firstname']; ?></a>

  </form>
</section>
