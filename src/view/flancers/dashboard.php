<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>
<section class="title__section">
  <div class="title">
    <h1>Available freelancers</h1>
  </div>
  <div class="nav">
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="filter" width="25"></a>
  </div>
</section>
<section>


<section class="filter">
    <p>filter by</p>
    <form action="index.php" method="get" id="flancerform">
    <input type="hidden" name="page" value="dashboard" />
    <input type="hidden" name="action" value="filter" />
      <select name="orderby" id="orderby" class="orderby">
       <option value="newest" <?php if(!empty($_GET['orderby']) && $_GET['orderby'] == 'newest'){echo 'selected';} ?>>newest</option>;
       <option value="recommendations" <?php if(!empty($_GET['orderby']) && $_GET['orderby'] == 'recommendations'){echo 'selected';} ?>>recommendations</option>
       <option value="location" <?php if(!empty($_GET['orderby']) && $_GET['orderby'] == 'location'){echo 'selected';} ?>>location</option>
       <option value="pricelow" <?php if(!empty($_GET['orderby']) && $_GET['orderby'] == 'pricelow'){echo 'selected';} ?>>lowest price</option>
      </select>
      <input type="submit" value="Filter" class="form__submit input input--button">
    </form>
    <?php
      if (!empty($_GET['action']) && $_GET['orderby']){
       echo '<p class="filter__p">You filtered by ' . $_GET['orderby'] . '</p>';
      }

    ?>

  </section>

</section>
<section class="flancers__overview">
  <?php
  foreach($flancers as $flancer){
    ?>
  <a href ="index.php?page=detail&id=<?php echo $flancer['id']; ?>">
    <div class="flancer__card">
      <div class="img__div">
        <img class="flancer__image" src="../images/<?php echo $flancer["image"] ?>" width="104" alt="<?php echo $flancer["firstname"] ?>">
      </div>

      <div class="flancer__data">
        <p class="flancer__type"><?php echo $flancer["flancetype"] ?></p>
        <h2 class="flancer__name"><?php echo $flancer["firstname"] . ' ' . $flancer["lastname"] ?></h3>
        <p class="flancer__bio" ><?php echo $flancer["bio"] ?></p>
          <div class="flancer__info">
            <p class="flancer__info flancer__info__location"><?php echo '<' . $flancer["location"] . ' km '?></p>
            <p class="flancer__info flancer__info__recommendations"><?php echo $flancer["recommendations"] ?> recommendations</p>
          </div>
      </div>
    </div>
  </a>
    <?php
  }
?>
</section>



