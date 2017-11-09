<?php
//Paramètre de connexion.
function connect(){
  $link = mysqli_connect('localhost', 'root', '0000', 'dwm8', 3306);
  return $link;
}

//Vérifie si l'email et le password sont correct.
function checkLogin($email, $password) {
  $email = clean($email);//On nettoie l'email.
  $password = cryptThis($password);//Pas besoin de la nettoyer car elle est cryptée puis envoyé.
  $link = connect();
  $sql = "SELECT `id` FROM `users` WHERE `email` = '$email' AND `password` = '$password' LIMIT 1;";
  
  $result = mysqli_query($link, $sql);

  if(!$result) {
    var_dump('Aucun résultat');
  } else {//On récupère le contenu.
    $fetch = mysqli_fetch_row($result);
    return $fetch;
  }
}

function cryptThis($var){
  $salt = 'CoucouMaPuce';
  return md5($var. $salt);
}

function clean($var){
  #return filter_var($var, "full_special_chars");
  return htmlspecialchars($var);
}
