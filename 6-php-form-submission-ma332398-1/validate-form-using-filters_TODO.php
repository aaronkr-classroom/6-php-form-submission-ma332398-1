<?php
// @TODO
?>
<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="validate-form-using-filters.php" method="POST">
  Name: <input type="text" name="name" value="<?= $user['name'] ?>">
  <span class="error"><?= $errors['name'] ?></span><br>
  Age: <input type="text" name="age" value="<?= $user['age'] ?>">
  <span class="error"><?= $errors['age'] ?></span><br>
  <input type="checkbox" name="terms" value="true"
      <?= $user['terms'] ? 'checked' : '' ?>> I agree to the terms and conditions
  <span class="error"><?= $errors['terms'] ?></span><br>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>