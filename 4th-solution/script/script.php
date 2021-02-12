<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $p = $_POST['p'];
      $low = preg_match_all('/[a-z]{2,}/', $p); $up = preg_match_all('/[A-Z]{3,}/', $p);
      $sym = preg_match_all('/[!@#$%^&*()-+]{1,}/', $p); $num = preg_match_all('/[0-9]{1,}/', $p);
      if($low == 1 && $up == 1 && $sym == 1 || $num == 1) echo 1;
      else echo 0;
}