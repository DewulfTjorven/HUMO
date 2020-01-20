<section class="container">
  <div id="content" class="cart">
    <form action="index.php?page=cart" method="post" id="cartform">


        <h1>Uw winkelmandje</h1>

        <?php if (!empty($_SESSION['info'])): ?>
          <div class="box__info"><?php echo $_SESSION['info']; ?></div>
        <?php endif; ?>

        <?php

        if(empty($_SESSION['cart'])){
          echo '
          <p>U heeft niets in uw winkelmandje</p>

          ';
        }

        ?>

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
            <p class='price'><?php echo money_format("%i", $item['product']['price']);?></p>
            <p class ="quantity"><input class="quantity" type="number" name="quantity[<?php echo $item['product']['product_id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /></p>
            <p class ="korting"><input class="korting" type="text" name="korting[<?php echo $item['product']['product_id'];?>]" value="<?php echo $item['korting'];?>" class="replace" /></p>
            <p class="update"><button type="submit" id="update-cart" class="btn__cart" name="action" value="update">Update</button></p>
            <p class='remove'><button type="submit" class="btn__cart--grey" name="remove" value="<?php echo $item['product']['product_id'];?>">Remove</button></p>
            <?php

            ?>
            <p class='total'><?php echo "Totaalprijs producten : " . money_format("%i", $itemTotal);?></p>
          </div>
          <?php
          }
          ?>
    </form>
    <form action="index.php?page=login" method="post" id="checkout">
        <div class='summary'>
          <p class='order-total'><span>total:</span> <?php echo money_format("%i", $total);?></p>
          <button class="btn__add" type="submit" id="checkout" name="checkout" value="checkout">Checkout</button>
        </div>
    </form>

  </div>
</section>



