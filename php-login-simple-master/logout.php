<?php
  session_start();

  session_unset(); /*limpia datos antiguos ya que no son necesarios*/

  session_destroy() ;/*borramos cookies*/

  header('Location: index.php');

  /*Con el vamos a cerrar la  la sesión actual 
  y mandar al usuario a la página de inicio*/
?>
