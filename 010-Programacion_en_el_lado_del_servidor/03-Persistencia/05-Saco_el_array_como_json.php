<?php
  $cliente = [];
  $cliente['nombre'] = "Bryan Alejandro";
  $cliente['apellidos'] = "Avila Castro";
  $cliente['email'] = "info@Avila.com";
  
  $json = json_encode($cliente);
  echo $json;  
?>