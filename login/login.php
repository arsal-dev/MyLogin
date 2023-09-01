<?php include "./include/header.php";
?>

<form action="action_login.php" method="post">

<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
  <small id="emailHelpId" class="form-text text-muted">Help text</small>
</div>

<div class="mb-3">
  <label for="" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="" placeholder="">
</div>

<input type="submit" value="submit" name="submit">

</form>
<?php include "./include/footer.php";
?>