<?php
  session_start();
  session_unset();
  session_destroy();
  session_regenerate_id();
  header('Location: /');// le / permet de renvoyer sur la page principal.
