<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade calculation</title>
</head>
<body>
    <?php 
    // $marks = (int)readline("Enter your marks");
    // echo $marks;
    $marks = 80;
    if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45&&$marks<=59)
{
	$grade = "Second Division";
}
else if($marks>=33&&$marks<=44)
{
	$grade = "Third Division";
}
else if($marks<33)
{
	$grade = "Fail";
}

echo "Student grade is: $grade";
    
    ?>
</body>
</html>