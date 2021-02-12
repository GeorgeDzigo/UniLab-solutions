<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $text = $_POST['txt'];
      $counter = 0;
      for($i = 0; $i < strlen($text); $i++) {
            if($text[$i] == "_") $counter++;
      }
      echo "Words => ". $counter+1;
}