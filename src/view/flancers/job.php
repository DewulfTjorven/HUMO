<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>



<section class="title__section">
    <h1 class="padding--bottom">Your jobs</h1>
    <a href="index.php?page=form"><img src="../images/addjob.svg" alt="add job image" width="22">
</section>
    <?php
    if(!empty($jobs)){
      foreach($jobs as $job){
    ?>
      <a href ="index.php?page=jobdetail&id=<?php echo $job['id']; ?>" class="padding--bottom">
        <div class="job__card margin--bottom">
           <div class="job__info">
            <h2 class="flancer__type"><?php echo $job["jobname"]; ?></h2>
            <p class="jobdetail__bio" ><?php echo $job["description"]; ?></p>
            <p class="flancer__info flancer__info__location"><?php echo $job["duration"] . ' days';?></p>
            <p class="flancer__info flancer__info__recommendations"><?php echo $job["location"]; ?></p>
            <p class="flancer__info flancer__info__recommendations"><?php echo $job["skills"]; ?></p>
           </div>
           <div class="job__price">
           <h2 class="flancer__name"><?php echo "$" . $job['price'] ?></h3>
           </div>
        </div>
      </a>
      <?php
      }

    }else{
      echo '<p>No jobs have been added yet</p>';
    }
    ?>
    </p>
  </div>
</section>


