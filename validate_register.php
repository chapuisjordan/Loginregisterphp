<?php
function validateRegister(){
  $errors =[];
  $errors['firstname'] = validateRequired($_POST['firstname']);
  $errors['lastname'] = validateRequired($_POST['lastname']);
  $errors['email'] = validateEmail($_POST['email']);
  $errors['password'] = validatePassword($_POST['email']);

  return $errors;
}
function validatePassword($password){
  $errors = array();

  if (strlen($password) > 5)
  $errors['invalidLenght'] = "Mot de passe inférieur à 5 caractères...";

  if (preg_match('/[[:digit:]]/', $password))
  $errors['invalidDigit'] = "Mot de passe ne contenant pas de numérique...";

  if (preg_match('/[[:alpha:]]/', $password))
  $errors['invalidAlpha'] = "Mot de passe ne contenant pas de numérique...";

  if(strtolower($password) == $password)
  $errors['invalidAlpha'] = "Mot de passe ne contient aucune minuscule....";

  $specialAllow = ["&", "@", "#", "[", "]", "*"];
  if (str_replace(["&", "@", "#", "[", "]", "*"], "_", $password) == $password)
  $errors['invalidSpecial'] = "Mot de passe ne contient pas un caractère spécial comme" . join($specialAllow);

  return(empty($errors))? true : $errors;
}

function validateEmail($email){
  $errors = array();

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Email invalide";
  }
  return(empty($errors))? true : $errors;
}
function validateRequired($str){
  if(empty($str)){
    return "Element requis";
  }
  return true;
}
