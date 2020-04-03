<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First program of PHP</h1>

    <?php
    
    // This is comment

    echo "use of echo";
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $color . "<br>";
    echo "My boat is " . $color  . "<br>";

    $txt = "Janardhan Singh";
    $x = 5;
    $y = 10.5;

    echo "My name is $txt and i'm from bihar" . "<br>";
    echo $x + $y .'<br>';

    $x = 5;
    $y = 10;

    function myTest() {
        global $x, $y;
        $y = $x + $y;
        echo $y .'<br>';
    }
    myTest();

    echo $y ."<br>"; // outputs 15

    function myTest1() {
        static $x = 0;
        echo $x.'<br>';
        $x++;
    }
    
    myTest1();
    myTest1();
    myTest1();

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>
</html>