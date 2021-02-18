 <?php 

// define('NAME', 'Katy');

$stringOne = 'my email is ';
$stringTwo = 'email@email.com';

// $name = "Katy";

// echo "hey, my name is $name";

// echo str_replace('K', 's', $name)

$ages = [20, 30, 40];

$peopleTwo = array('One', 'Two', 'Three');

// echo $peopleTwo[1];
$ages[] = 60;
array_push($ages, 70);
print_r($ages);
echo count($ages);

$arrayThree =  array_merge($peopleTwo, $ages);
print_r($arrayThree);

//Key and Value Pairs

$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'Luigi' => 'brown'];

echo $ninjasOne['mario'];

$ninjasTwo = array('shaun' => 'black', 'mario' => 'orange', 'Luigi' => 'brown');

print_r($ninjasTwo)

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