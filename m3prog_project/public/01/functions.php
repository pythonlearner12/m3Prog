<?php
$lower_case = "this becomes upper case";
$String = "qwertyuiopasdfghjklzxcvbnm";
$made_up_name = "file.txt";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Title of the page"; ?></title>
</head>
<body>
    <p>
        uppercase: <?php echo strtoupper($lower_case); ?>
    </p>

    <p>
        a index: <?php echo strpos($String, "a"); ?>
    </p>

    <p>
        text search: <?php echo file_exists($made_up_name) ? 'File exists' : 'File does not exist'; ?>
    </p>
</body>
</html>
