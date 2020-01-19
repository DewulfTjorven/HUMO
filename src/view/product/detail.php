<section class="container">
  <a href="index.php?page=index?"><button type="button" class="btn__back"> < Terug</button></a>

  <?php if (!empty($_SESSION['info'])): ?>
          <div class="box__info"><?php echo $_SESSION['info']; ?></div>
  <?php endif; ?>

  <div class="cart__detail">
  <a href="index.php?page=cart" class="cart__desktop"><img src="../images/icons/shopping-cart.png"></a>
  </div>

  <section class="details">
    <article class="details__image">
      <img src="../images/products/<?php echo $product["image"] . ".jpg";?>" alt="<?php echo $product["image"];?>">
    </article>
    <article class="details__info">
      <h1 class="details__productname"><?php echo $product['productname']; ?></h1><br>
      <h3 class="details__author"><?php echo $product['author']; ?></h3><br>
      <strong><h2 class="details__price"><?php echo money_format("%i", $product['price']);?></h2></strong>
      <p class="details__description"><?php echo $product['description']; ?></p>
      <form method="post" action="index.php?page=cart">
          <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
          <p class="error"></p>
          <input type="number"  id="quantity" class="input quantity-input" name="quantity" placeholder="Aantal" min=1 max=10 required><br><br>

          <?php if($product["tag"] === "boek"){?>
                <input type="text" class="storeValue search" placeholder="Kortingscode" name="korting" value="<?php if(!empty($_SESSION['cart']['korting'])){ echo $_SESSION['cart']['korting'];} ?>"><?php
          }
          ?>
          <button class="btn__add btn__korting" id="btn__add" type="submit" name="action" value="add">Add to cart</button>
      </form>
    </article>
  </section>

  <h2 class="text--color__red shop__aanbevolen">Misschien ook interessant:</h2>
  <section class="shop__aanbevolen shop__container">

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
