<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $txt = explode(" ", $_POST['txt']);
      for($i = 0; $i < count($txt); $i++) {
            $t = unpack("C*", $txt[$i]);
            $t = array_values(array_filter($t, function($x) {
                  if($x >= 62 && $x <= 75) return $x;
                  else if($x >= 110 && $x <= 125) return $x;
            }));
            if(count($t)  == strlen($txt[$i])) echo "ხალისიანი <br />";
            else echo "უხალისო <br />";
      }

}