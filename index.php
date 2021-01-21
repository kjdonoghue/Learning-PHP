 <?php 

define('NAME', 'Katy');

$stringOne = 'my email is ';
$stringTwo = 'email@email.com';

$name = "Katy";

echo "hey, my name is $name";

echo str_replace('K', 's', $name)

?> 


<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1> <?php echo 'Hello World'; ?></h1>
        <div> <?php echo $stringOne.$stringTwo; ?></div>
    </body>
</html>