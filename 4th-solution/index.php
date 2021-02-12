<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php require_once './script/script.php'?>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="password" name="p" placeholder="Enter your password">
            <button type="submit">Submit</button>
      </form>
</body>
</html>