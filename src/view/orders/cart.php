  <div id="content" class="cart">
    <form action="index.php?page=cart" method="post" id="cartform">
      <table class='cart'>
        <thead>
          <tr>
            <th class='product-description' colspan='2'></th>
            <th class='price'>Price</th>
            <th class='quantity'>Quantity</th>
            <th class='remove-item'></th>
            <th class='total'>Total</th>
          </tr>
        </thead>

        <tbody>

          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
          ?>
          <tr class="item">
            <td class='price'><?php echo money_format("%i", $item['product']['price']);?></td>
            <td class='quantity'> <input class="text quantity" type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </td>
            <td class='remove-item'><button type="submit" class="btn remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>">Remove</button></td>
            <td class='total'><?php echo money_format("%i", $itemTotal);?></td>
          </tr>
          <?php
          }
          ?>


        </tbody>
        </table>
        <div class='column two'>
          <p class='order-total'><span>total:</span> <?php echo money_format("%i", $total);?></p>
          <p><button type="submit" id="update-cart" class="btn" name="action" value="update">Update Cart</button></p>

          <p><button class="btn-reversed btn" type="submit" id="checkout" name="action" value="checkout">Checkout</button></p>

        </div>

    </form>
  </div>
