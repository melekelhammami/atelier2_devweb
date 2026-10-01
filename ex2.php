<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
    include "navbar.php" ;
    $tabpays1=['tunisia','algeria','libye','morroco','egypt'];
    echo 'les pays sonnt :';
    echo "<pre>";
    print_r($tabpays1);
    echo "</pre>";
    sort($tabpays1);
    echo "tableau trié par ordre alphabetique croissant :";
    echo "<pre>";
    print_r($tabpays1);
    echo "</pre>";
    echo "tableau trié par ordre décroissant des valeurs ";
    arsort($tabpays1);
    echo "<pre>";
    print_r($tabpays1);
    echo "</pre>";
    $tabpays2 = [
    'tunis' => 'tunisia','alger' => 'algeria','tripoli' => 'libye','casablanca' => 'morroco','caire' => 'egypt'];
    echo 'les pays sonnt :';
    echo "<pre>";
    print_r($tabpays2);
    echo "</pre>";
    asort($tabpays2);
    echo "tableau trié par ordre alphabetique croissant :";
    echo "<pre>";
    print_r($tabpays2);
    echo "</pre>";
    echo "tableau trié par ordre décroissant des valeurs ";
    arsort($tabpays2);
    echo "<pre>";
    print_r($tabpays2);
    echo "</pre>";
    ksort($tabpays2);
    echo "tableau trié par ordre alphabetique croissant des indices:";
    echo "<pre>";
    print_r($tabpays2);
    echo "</pre>";
    echo "tableau trié par ordre décroissant des valeurs des indices";
    krsort($tabpays2);
    echo "<pre>";
    print_r($tabpays2);
    echo "</pre>";
    ?>
    <div class="mt-lg-5">
<table class="table">
    <tr><th>liste des pays</th></tr>
    <?php
    foreach ($tabpays1 as $value) {
        ?>
        <tr>
            <td>
                <?= $value ?>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
<div class="mt-lg-5">
<table class="table">
    <tr><th>Capitale</th><th>Pays</th></tr>
    <?php
    foreach ($tabpays2 as $key => $value) {
        ?>
        <tr>
            <td>
                <?= $key ?> 
            </td>
            <td>
                <?= $value ?>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
</body>
</html>