<section class="container">
  <a href="index.php?page=index?"><button type="button" class="btn__back"> < Terug</button></a>

  <?php if (!empty($_SESSION['info'])): ?>
          <div class="box__info"><?php echo $_SESSION['info']; ?></div>
  <?php endif; ?>

  <section class="details">
    <article class="details__image">

    </article>
    <article class="details__info">
      <h1 class="details__productname"><?php echo $product['productname']; ?></h1><br>
      <h3 class="details__author"><?php echo $product['author']; ?></h3><br>
      <strong><h2 class="details__price"><?php echo money_format("%i", $product['price']);?></h2></strong>
      <p class="details__description"><?php echo $product['description']; ?></p>
      <form method="post" action="index.php?page=cart">
          <p class="error"></p>
          <input type="number" value="<?php if(!empty($_SESSION['cart']['quantity'])){ echo $_SESSION['cart']['quantity'];} ?>" id="quantity" class="input quantity-input" name="quantity" placeholder="1" min=1 max=10><br><br>
          <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
          <button class="btn__add" id="btn__add" type="submit" name="action" value="add">Add to cart</button>
          <p class="addedMessage"></p>
      </form>
    </article>
  </section>
</section>
