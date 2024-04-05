<?php
include_once("database.php");
$connection = database_connect();

$result= $connection->query("select * from meterstanden");

print_r($result->fetch_all());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach ($result as $rij) {
?>
    <section>
        <h1>meterstanden</h1>
        <p><label>Stand: </label> <?= $rij["stand"]?> KwH</p>
    </section>
<?php
}
?>

</body>
</html>