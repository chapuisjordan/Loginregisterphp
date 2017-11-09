<?php
require_once 'form_register.php';

$array = [];
$error = validateRequired($_POST['firstname']);
if($error){
  $errors['firstname'] = $error;
}
$error = validateRequired($_POST['lastname']);
if($error){
  $errors['lastname'] = $error;
}
$error = validateEmail($_POST['email']);
if($error){
  $errors['email'] = $error;
}
$error = validatePassword($_POST['password']);
if($error){
  $errors['password'] = $error;
}
function validEmpty($var){
  if(empty($var)){
    return '$var vide';
  }
}
