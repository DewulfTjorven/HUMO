<section class="header">
  <img src="../images/logo.svg" alt="Flancer logo" width="150">
</section>

<section class="details">
            <div class="job__details">
              <h2 class="flancer__type"><?php echo $job["jobname"]; ?></h2>
              <p class="jobdetail__bio" ><?php echo $job["description"]; ?></p>
              <p class="flancer__info flancer__info__location"><?php echo $job["duration"] . ' days';?></p>
              <p class="flancer__info flancer__info__recommendations"><?php echo $job["location"]; ?></p>
              <p class="flancer__info flancer__info__recommendations"><?php echo $job["skills"]; ?></p>
              <h2 class="flancer__name"><?php echo "$" . $job['price'] ?></h3>
              <a href ="index.php?page=jobupdate&id=<?php echo $job['id']; ?>" class="padding--bottom">Update job</a>
              <form action="index.php?page=jobdetail" method="post">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?php $job['id']?>">
              </form>

</section>
