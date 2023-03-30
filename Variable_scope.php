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
   $a = 98; // global scope variable
   function test(){
    //    $a = 97; // local scope variable

        global $a; // give me the access for global variable
        $a = 100; // it will change the value of global variable
       echo "The value of your variable is $a";
       
   }
   test();
   echo $a; // it will give the new value of global varibal;
   echo "<br>";

//     to find all global variables
   echo var_dump($GLOBALS);

    ?>
</body>
</html>