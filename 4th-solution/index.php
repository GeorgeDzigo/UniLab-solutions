<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $p = $_POST['p'];
                  $low = preg_match_all('/[a-z]{2,}/', $p); $up = preg_match_all('/[A-Z]{3,}/', $p);
                  $sym = preg_match_all('/[!@#$%^&*()-+]{1,}/', $p); $num = preg_match_all('/[0-9]{1,}/', $p);
                  if($low == 1 && $up == 1 && $sym == 1 || $num == 1) echo 1;
                  else echo 0;
            }
      ?>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="password" name="p" placeholder="Enter your password">
            <button type="submit">Submit</button>
      </form>
</body>
</html>