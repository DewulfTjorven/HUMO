<section class="container">
  <section class="filter__container">
    <article>
      <div class="filter">
          <div class="filter__select">
            <form action="index.php" method="get" id="filterform">
            <!-- <input class="search" type="text" placeholder="Zoek hier uw producten" value="" name="search"> -->
            <input type="hidden" name="action" value="filter" class="filter__input"/>
              <select name="filterby" id="filterby" class="filter__input">
              <option value="alle producten" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'alle producten'){echo 'selected';} ?>>alle producten</option>;
              <option value="boek" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'boek'){echo 'selected';} ?>>boek</option>;
              <option value="eboek" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'eboek'){echo 'selected';} ?>>e-book</option>
              <option value="abonnement" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'abonnement'){echo 'selected';} ?>>abonnement</option>
              <option value="extra" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'extra'){echo 'selected';} ?>>extra</option>
              </select>
              <input type="submit" value="Filter" class="form__submit input input--button">
            </form>
          </div>
          <a href="index.php?page=cart" class="cart__desktop"><img src="../images/icons/shopping-cart.png"></a>
        </form>
      </div>
    </article>
  </section>

  <section class="shop__container">
      <?php
      foreach($products as $product){
        ?>
      <a href="index.php?page=detail&product_id=<?php echo $product['product_id']; ?>">
        <article class="product__card">
          <div class="product__image">
            <img src="../images/products/<?php echo $product["image"] . ".jpg";?>" alt="<?php echo $product["image"];?>">
          </div>
          <div class="product__info">
            <h2 class="product__productname"><?php echo $product["productname"] ?></h2>
            <h2 class="product__price text--color__red"><?php echo money_format("%i", $product['price']);?></h2>
          </div>
        </article>
      </a>
        <?php
      }
    ?>

  </section>
</section>
