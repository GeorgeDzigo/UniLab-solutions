<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $int = $_POST['num'];
      for($i = 1; $i <= $int; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) echo "უნილაბი <br />";
            else if ($i % 3 == 0 && $i % 5 != 0) echo "ილიაუნი <br />";
            else if ($i % 3 != 0 && $i % 5 == 0) echo "php <br />";
            else echo "$i <br />";
      }
}