<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Program</title>
</head>
<body>
    <?php
    $num = 6;
    $fact = 1;
    for($i=1; $i<=$num; $i++) {
        $fact = $fact*$i;
    }
    echo $fact;
    
    ?>
</body>
</html>