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
                  $int = $_POST['num'];
                  for($i = 1; $i <= $int; $i++) {
                        if ($i % 3 == 0 && $i % 5 == 0) echo "უნილაბი <br />";
                        else if ($i % 3 == 0 && $i % 5 != 0) echo "ილიაუნი <br />";
                        else if ($i % 3 != 0 && $i % 5 == 0) echo "php <br />";
                        else echo "$i <br />";
                  }
            }
      ?>
      <form action="<?= $_SERVER['PHP_SELf']?>" method="POST">
            <input type="number" name="num" placeholder="Enter Number" required>
            <button type="submit">Submit</button>
      </form>
</body>
</html>