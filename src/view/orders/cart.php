  <div id="content" class="cart">
    <form action="index.php?page=cart" method="post" id="cartform">

        <h1>Uw winkelmandje</h1>

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
            <p class="update"><button type="submit" id="update-cart" class="btn-update" name="action" value="update">Update</button></p>
            <p class='remove'><button type="submit" class="btn remove-from-cart" name="remove" value="<?php echo $item['product']['product_id'];?>">Remove</button></p>
            <!-- <p class='total'><?php echo money_format("%i", $itemTotal);?></p> -->
          </div>
          <?php
          }
          ?>

        <div class='summary'>
          <p class='order-total'><span>total:</span> <?php echo money_format("%i", $total);?></p>
          <p><button class="btn-reversed btn" type="submit" id="checkout" name="action" value="checkout">Checkout</button></p>
        </div>

    </form>
  </div>
