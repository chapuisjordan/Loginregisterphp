<?php
require_once 'validate_register.php';
if(isset($_POST['submit'])){
  $errors = validateRegister();
}

?>
  <form action="register.php" method="POST">
  <label for="firstname">Prenom</label>
  <input id="firstname"type="text" name="firstname">
  <br>
  <label for="lastname">Nom</label>
  <input id="lastname"type="text" name="lastname">
  <br>
  <label for="email">Email</label>
  <input id="email"type="text" name="email">
  <br>
  <?php
  if(isset($errors['email'])){
    echo $errors['email'];
  }
  ?>
  <br>
  <label for="password">Password</label>
  <input id="password"type="password" name="">
  <br>
  <label for="repassword">Repassword</label>
  <input id="repassword"type="password" name="">
  <br>
  <input name="submit" type="submit">
</form>
