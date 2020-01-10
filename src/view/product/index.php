<section class="filter__container">
  <article>
    <div class="filter">
      <form action="index.php" method="get" id="flancerform">
        <div class="search__container">
          <input class="search" type="text" name="search" value="" placeholder="Zoek jouw producten hier"/>
        </div>
        <div class="filter__select">
          <select name="filter" id="" class="filter__input">
            <option value="newest">newest</option>
            <option value="newest">newest</option>
            <option value="newest">newest</option>
            <option value="newest">newest</option>
          </select>
        </div>
      </form>
    </div>
  </article>
</section>
<section class="shop__container">

    <?php
    foreach($products as $product){
      ?>
    <a href ="index.php?page=index&id=<?php echo $product['id']; ?>">
      <article class="product__card">
        <p class="flancer__type"><?php echo $product["productname"] ?></p>
      </article>
    </a>
      <?php
    }
  ?>

</section>
