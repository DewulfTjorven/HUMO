<a href="index.php?page=index?"><button type="button" class="btn__back"> < Terug</button></a>
<section class="details">
  <article class="details__image">

  </article>
  <article class="details__info">
    <h1 class="details__productname"><?php echo $product['productname']; ?></h1><br>
    <h3 class="details__author"><?php echo $product['author']; ?></h3><br>
    <strong><h2 class="details__price"><?php echo money_format("%i", $product['price']);?></h2></strong>
    <p class="details__description"><?php echo $product['description']; ?></p>
      <div>
          <form action="index.php" method="get" id="filterform">
          <input type="hidden" name="action" value="filter" class="filter__input"/>
            <select name="filterby" id="filterby" class="filter__input">
            <option value="alle producten" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'alle producten'){echo 'selected';} ?>>alle producten</option>;
            <option value="boek" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'boek'){echo 'selected';} ?>>boek</option>;
            <option value="eboek" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'eboek'){echo 'selected';} ?>>eboek</option>
            <option value="abonnement" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'abonnement'){echo 'selected';} ?>>abbonement</option>
            <option value="extra" <?php if(!empty($_GET['filterby']) && $_GET['filterby'] == 'extra'){echo 'selected';} ?>>extra</option>
            </select>
            <input type="submit" value="Filter" class="form__submit input input--button">
          </form>
        </div>
    <form method="post" action="index.php?page=cart">
        <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
        <button class="btn__add" type="submit" name="action" value="add">Add to cart</button>
    </form>
  </article>


</section>
