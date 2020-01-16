
<section class="container">
  <div id="content" class="cart">
    <form action="index.php?page=overview" method="post" id="cartform">

        <h1>Uw overzicht</h1>
    <div class="cart__overview">
          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
          ?>
          <div class="item">
            <p class='productname'><?php echo $item['product']['productname'];?></p>
            <p class='price'><?php echo money_format("%i", $item['product']['price']);?></p>
            <p class ="quantity"><input class="quantity" type="number" name="quantity[<?php echo $item['product']['product_id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /></p>
            <p class='remove'><button type="submit" class="btn remove-from-cart" name="remove" value="<?php echo $item['product']['product_id'];?>">Remove</button></p>
            <!-- <p class='total'><?php echo money_format("%i", $itemTotal);?></p> -->
          </div>
          <?php
          }
          ?>
    </form>
    </div>

    <div class="user__overview">
      <p class='name'>Tjorven Dewulf</p>
      <p class='name'>Leiaarde 28</p>
      <p class='name'>0471119664</p>

    </div>

    <div class="user__overview">
      <p class='name'>Betaalmethode: Maestro</p>
      <p class='name'>BE48 6108 7564 3212</p>
      <p class='name'>12/22</p>

    </div>

    <div class="pay">
    <p class='overview__total text--color__red'><span>total:</span> <?php echo money_format("%i", $total);?></p>
    <a href="index.php?page=overview"><button class="btn__add" type="" id="" name="" value="">Checkout</button></a>
    </div>


  </div>
</section>
