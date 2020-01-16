<section class="container">
  <section class="login">
  <h1>Meld je aan</h1>
  <form action="index.php?page=login" method="post">
    <p class="error"></p>
    <input class="input login__input" type="text" name="username" id="" placeholder="Uw gebruikersnaam" minlength=7 maxlength=18 required>
    <input class="input login__input" type="password" name="password" id="" placeholder="Uw wachtwoord" minlength=7 maxlength=18 required>
    <button class="btn__add" type="submit" id="checkout" name="action" value="login">Log in</button>
  </form>

  <section class="login__options">
    <a href="index.php?page=register">Nog geen account? <span class="text--color__red">Registreer hier</span></a><br><br>
    <a href="index.php?page=overview">Geen tijd? <span class="text--color__red">Ga door als gast</span></a>
  </section>
  </section>
</section>
