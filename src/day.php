<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Show</title>
</head>

<body>
    <?php
    $day = "1";
    switch ($day) {
        case "1":
           echo "The day is Monday";
            break;
        case "2":
          echo  "The day is Tuesday";
            break;
        case "3":
         echo   "The day is Wednesday";
            break;
        case "4":
         echo   "The day is Thursday";
            break;
        case "5":
          echo  "The day is friday";
            break;
        case "6":
          echo  "The day is Saturday";
            break;
        case "7":
         echo   "The day is Sunday";
            break;
        default:
          echo  "Invalid Input";
    }

    ?>
</body>

</html>