
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $namen = ["Homer", "Peter", "Fred", "Ang", "Bob"];
        echo count($namen);
        sort($namen);
    ?><br>

    <?php
    
    array_pop($namen);
    array_push($namen, "peter2");
    $namen[5] = "dit is een gek manier om iets toe tevoegen";
    print_r($namen);?><br>


    <?php
        $namen_tekst = ["Homerx", "Peterx", "Fredx", "Angx", "Bobx"];
        echo implode("<br>", $namen_tekst);
    
    
    
    ?><br>

    <?php
        //echo implode("<br>", array_reverse($namen_tekst));
        $namen_string = "Homer Peter Fred Ang Bob";
        print_r(explode(" ", $namen_string))

    ?>

</html>