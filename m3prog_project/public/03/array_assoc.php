<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $weer = ["key" => "dinsdag", "value" => "12 graden", "neerslag" => "1mm"];
        $dagen = ["maandag: ", "dinsdag: ", "woesndag: ", "donderdag: ", "vrijdag: ", "zaterdag: ", "zondag: "];
        print_r($weer);
        print("<br>");

        for ($i=0; $i < 7; $i++) { 
            
            print($dagen[$i] . $weer["value"]);  
            print("<br>");


        };
    ?>
    
</body>
</html>