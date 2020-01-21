<section class="container">
  <a href="index.php?page=login"><button type="button" class="btn__back"> < Terug</button></a>

  <section class="register">
  <h1>Maak een nieuw account aan</h1>
  <form action="" method="post">
    <input class="login__input" type="text" name="" id="" placeholder="Uw gebruikersnaam *" required>
    <input class="login__input" type="email" name="" id="" placeholder="Uw Email *" required>
    <input class="login__input" type="password" name="" id="" placeholder="Uw wachtwoord *" required>
    <input class="login__input" type="password" name="" id="" placeholder="Typ uw wachtwoord opnieuw*" required>
    <input class="login__input" type="number" name="" id="" placeholder="Telefoonnummer *" required maxlength=4 minlength="4">
    <div class="input__medium">
      <input class="login__input medium" type="text" name="" id="" placeholder="Woonadres *" required>
      <input class="login__input small" type="number" name="" id="" placeholder="Postcode *" required maxlength=4 minlength="4">
    </div>
    <div class="input__medium">
      <input class="login__input small" type="number" name="" id="" placeholder="Leeftijd *" required min=18>
    </div>
    <div class="input__medium">
        <div class='accept'>
            <div class='gift-receipt'>
              <input id="gift-receipt" type="checkbox" name="attributes[gift-receipt]" value="yes"  /><label for="gift-receipt" class='gift-r'>Ik accepteer HUMO's privacyterms en ga akkoord met alle service regels</label>
            </div>
        </div>
    </div>
    </form>

    <a href="index.php?page=overview"><button class="btn__add" type="" id="" name="" value="">Checkout</button></a>

  </section>
</section>
<script src="../js/validate.js"></script>
