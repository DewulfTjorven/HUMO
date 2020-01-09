<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
    <h1 class="padding--bottom">Add the job details</h1>
    <a href="index.php?page=job"><img src="../images/filter.svg" alt="view jobs" width="22"></a>
</section>

<form action="index.php?page=formupdate" method="post" class="job__form">
    <input type="hidden" name="action" value="updatejob">
    <input type="hidden" name="id" value="<?php echo $lastjob['id'] ?>">

    <label for="form__price" class=>Budget</label>
    <input class="input form__price" type="number" name="price" min=0 required />
    <label for="form__duration">Duration in days</label>
    <input class="input form__duration" type="number" name="duration" min=0 required />
    <label for="form__location">Location</label>
    <input class="input form__location" type="text" name="location" required />
    <label for="form__skills">Required skills</label>
    <input class="input form__skills" type="text" name="skills" required />
    <button href="index.php?page=job" type="submit" class="button-blue">Add job</button>
</form>
