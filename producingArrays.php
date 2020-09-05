""" creating an array """
// $days[] = 'Monday'; $days[] = 'Tuesday'; $days[] = 'Wednesday'; $days[] = 'Thursday'; $days[] = 'Friday';
// or $days = array("Mondat", "Tuesday", "Wednesday", "Thursday", "Friday");

// Associatave arrays
// you can assign a key name to each element
// $months["jan"] = "January";
// $months["feb"] = "February";
// $months["mar"] = "March";
// $months["apr"] = "April";
// $months["may"] = "May";
// or
// array("jan" => "January", "feb" => "February", "mar" => "March", "apr" => "April", "may" => "May")


""" Traversing arrays """
// foreach($months as $value) {
    // use the current value on each itteration 
// }

""" Traversing just the keys """
// foreach($months as $key => $value) {
    // use the keyu and value on each itteration
// }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embedding php in html</title>
</head>
<body>
    <?php   
    $days[] = 'Monday'; $days[] = 'Tuesday'; $days[] = 'Wednesday'; $days[] = 'Thursday'; $days[] = 'Friday';
    foreach($days as $value) {
        {
            echo "&bull; $value ";
        }
    }
    echo '<h1>Hello World!</h1>' ;
    $months = array("jan" => "January", "feb" => "February", "mar" => "March", "apr" => "April", "may" => "May");
    echo '<dl>';
    foreach($months as $key => $value) {
        {echo "<dt> $key <dd> $value ";}
    }
    echo '</dl>'
    ?>
</body>
</html>