// NAMES ALWAYS START WITH A $
// THE NAMES CAN CONTAIN LETTERS NUMBERS AND UNDERSCORES
// THE FIRST CHARACTER AFTER THE $ MUST BE A LETTER SUCH AS $name_f

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embedding php in html</title>
</head>
<body>
  
    <?php  
      $body_temp = 98.6;
      echo body_temp; 
    echo '<h1>Body tempurature is $body_temp degrees farenheit</h1>' ;
    ?>
</body>
</html>