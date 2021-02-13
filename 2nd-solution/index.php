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
                  $text = $_POST['txt'];
                  $counter = 0;
                  for($i = 0; $i < strlen($text); $i++) {
                        if($text[$i] == "_") $counter++;
                  }
                  echo "Words => ". $counter+1;
            }
      ?>
      <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" required>
            <input type="text" name="txt" placeholder="Enter snaked text">
            <button type="submit">Submit</button>
      </form>
</body>
</html>