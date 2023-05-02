<?php
if(isset($_POST['submit']) && !empty($_POST['select_option'])) {
  $opcionSeleccionada = $_POST['select_option'];
  echo "La opción seleccionada es: " . $opcionSeleccionada;
}

