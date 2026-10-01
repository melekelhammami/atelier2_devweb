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
    include "navbar.php"
    ?>
    <div class="container mt-lg-5">
    <?php
$Notes=["Rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"Ahmed"=>09.5,"Yassine"=>15.5,"Islem"=>12.00];
echo "les etudiants qui ont un moyenne plus de 10 :";
echo "</br>";
foreach ($Notes as $key => $value) {
    if ($value >= 10) {
        echo "$key";
        echo "</br>";
    }
}
$c=count($Notes);
echo "le nombre des etudiants : ".$c;
$b="Rami";
$bn=7.50;
foreach ($Notes as $key => $value) {
    if ($value >= $bn ) {
        $bn=$value;
        $b=$key;
    }
}
echo "</br>L'etudiant qui a une bonne note: ".$b;
?>
<div class="mt-lg-5">
<table class="table ">
    <tr><th>NOM</th><th>Note en PHP</th></tr>
    <?php
    foreach ($Notes as $key => $value) {
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

<div class="mt-lg-5">
<table class="table">
    <tr><th>NOM</th><th>Note en PHP</th></tr>
    <?php
    asort($Notes);
    echo "Le tableau selon l'ordre croissant des notes :";
    foreach ($Notes as $key => $value) {
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
<div class="mt-lg-5">
<table class="table">
    <tr><th>NOM</th><th>Note en PHP</th></tr>
    <?php
    krsort($Notes);
    echo "Le tableau selon l'ordre decroissant des nom :";
    foreach ($Notes as $key => $value) {
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
<?php 
$moyenne=0;
$nombre_etudiants =0;
foreach ($Notes as $value) {
    $moyenne =$moyenne + $value;
    $nombre_etudiants = $nombre_etudiants + 1;
}
$moyenne = $moyenne / $nombre_etudiants ;
echo "La moyenne des notes est :'$moyenne'"
?>
</div>
</body>
</html>
