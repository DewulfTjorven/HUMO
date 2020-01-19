
<section class="container">
  <div id="content" class="cart">
    <form action="index.php?page=overview" method="post" id="cartform">

    <?php if (!empty($_SESSION['info'])): ?>
          <div class="box__info"><?php echo $_SESSION['info']; ?></div>
  <?php endif; ?>

        <h1>Uw overzicht</h1>
    <div class="cart__overview">
    <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $kortingscode = "HUMO20";
            if($item['korting'] === $kortingscode){
              $item['product']['price'] = 4.99;
              $itemTotal = 4.99 * $item['quantity'];
              $total += $itemTotal;
            }
            else{
              $itemTotal = $item['product']['price'] * $item['quantity'];
              $total += $itemTotal;
            }

          ?>
          <div class="item">
            <p class='productname'><?php echo $item['product']['productname'];?></p>
            <p class='price' ><?php echo money_format("%i", $item['product']['price']);?></p>
            <p class ="quantity"><input class="quantity" type="number" name="quantity[<?php echo $item['product']['product_id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /></p>
            <!-- <p class='total'><?php echo money_format("%i", $itemTotal);?></p> -->
          </div>
          <?php
          }
          ?>
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
    <button class="btn__add btn__korting" id="btn__add" type="submit" name="action" value="pay">Add to cart</button>

    </div>

    </form>
  </div>
</section>
