<a href="index.php?page=index?"><button type="button" class="btn__back"> < Terug</button></a>
<section class="details">
  <article class="details__image">

  </article>
  <article class="details__info">
    <h1 class="details__productname"><?php echo $product['productname']; ?></h1><br>
    <h3 class="details__author"><?php echo $product['author']; ?></h3><br>
    <strong><h2 class="details__price"><?php echo money_format("%i", $product['price']);?></h2></strong>
    <p class="details__description"><?php echo $product['description']; ?></p>
    <form method="post" action="index.php?page=cart">
        <input type="number" value="quantity" id="quantity" class="quantity-input" name="quantity" placeholder="1" min="1" max-amount="10">
        <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
        <button class="btn__add" type="submit" name="action" value="add">Add to cart</button>
    </form>
  </article>
</section>
