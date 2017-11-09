<?php
require_once 'validate_educations.php';
require_once '../db.php';
if(isset($_POST['submit'])){
  $errors = validateEducations();
  if (count($errors) == 0){
    $data['date_begin'] = ($_POST['date_begin']);
    $data['date_ended'] = ($_POST['date_ended']);
    $data['title'] = ($_POST['title']);
    $data['description'] = ($_POST['description']);

    $result = insertEducations($data);
    if ($result = true){

      echo "Vos données ont bien été enregistrées.";
    }

  }
  return $errors;
}
?>
<form action="" metod="POST">

  <label for="date_begin">Date de début</label>
  <input id="date_begin" type="date" value='<?php (isset($_POST['date_begin']))? $_POST['date_begin'] : "";?>' name="date_begin">
  <br>
  <?php
  if (isset($errors['date_begin'])){
    echo $errors['date_begin'];
  }
   ?>
   <label for="date_ended">Date de fin</label>
   <input id="date_ended" type="date" value='<?php (isset($_POST['date_ended']))? $_POST['date_ended'] : "";?>' name="date_ended">
   <br>
   <?php
   if(isset($errors['date_ended'])){
     echo $errors['date_ended'];
   }
    ?>
   <label for="title">Nom du diplôme</label>
   <input id="title" type="text" value='<?php (isset($_POST['title']))? $_POST['title'] : "";?>' name="title">
   <br>
   <?php
   if(isset($errors['title'])){
     echo $errors['title'];
   }
    ?>
   <label for="description">Description</label>
   <input id="description" type="text" value='<?php (isset($_POST['description']))? $_POST['description'] : "";?>' name="description">
   <br>
   <?php
   if(isset($errors['description'])){
     echo $errors['description'];
   }
    ?>
   <input type="submit" name="submit">

</form>
