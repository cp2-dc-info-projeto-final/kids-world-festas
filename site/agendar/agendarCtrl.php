<?php


<form action="/site/agendar/agendarView.php" method="get"> 
    <input type="text" id="calendario" name="calendario" value="Date"/>
  </form>

  $date = $_GET['calendario'];
  echo '$date';

?>