<?php

  function h($string){
    return htmlspecialchars($string, ENT_QUOTES,'UTF-8' );
  }

  $pattern_email = "/\A([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+\z/";
  $pattern_pass = "/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,30}$/";

  session_start();

?>