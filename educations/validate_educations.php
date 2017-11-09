<?php

function validateEducations(){
  $errors = [];
  $errors = validateDateBegin($_POST['date_begin']);
  if ($error) {
    $errors['date_begin'] = $error;
  }
  $errors = validateDateEnded($_POST['date_ended']);
  if ($error) {
    $errors['date_ended'] = $error;
  }
  $errors = validateTitle($_POST['title']);
  if ($error) {
    $errors['title'] = $error;
  }
  $errors = validateDescription($_POST['description']);
  if ($error) {
    $errors['description'] = $error;
  }
  return $errors;

}

function validateDateBegin(){
  if ($_POST['date_begin'] > $POST['date_ended']){
    echo 'La date de début est datée après la date de fin...';
  }
  if (empty($_POST['date_begin'])){
    $errors['date_begin'] = $error;
  }
}

function validateDateEnded(){
  $dateActuelle = ('Y-m-d H:i:s');
  if ($_POST['date_ended'] > $dateActuelle){
    echo 'lol';
  }
}

function validateTitle(){
  if (empty($_POST['title'])){
    $errors['title'] = $error;
  }
}

function validateDescription(){
  if (empty($_POST['Description'])){
    $errors['Description'] = $error;
  }
}
