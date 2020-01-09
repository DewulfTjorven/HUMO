<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
    <h1 class="padding--bottom">Update your existing job</h1>
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="view jobs" width="22"></a>
</section>

<section>
<form action="index.php?page=jobupdate" method="POST" class="job__form">
    <input type="hidden" name="action" value="jobupdate"/>
    <input type="hidden" name="id" value="<?php echo $job['id'] ?>"/>
    <label for="form__jobname">Name of the job</label>
    <input class="form__jobname padding--bottom" type="text" name="jobname" required value="<?php echo $job['jobname'] ?>"/>
    <label for="form__textarea">Describe your job offer</label>
    <textarea class="form__textarea" type="text" name="description" rows = "10" cols="100" required></textarea>
    <label for="form__jobname">Your budget</label>
    <input class="form__price" type="number" name="price" min=0 required value="<?php echo $job['price'] ?>"/>
    <label for="form__jobname">How long would this job take in days?</label>
    <input class="form__duration" type="number" name="duration" min=0 required value="<?php echo $job['duration'] ?>"/>
    <label for="form__jobname">Where are</label>
    <input class="form__location" type="text" name="location" required value="<?php echo $job['location'] ?>"/>
    <label for="form__jobname">Name of the job</label>
    <input class="form__skills" type="text" name="skills" required value="<?php echo $job['skills'] ?>"/>
    <input type="submit" value="update job">
  </form>
</section>
