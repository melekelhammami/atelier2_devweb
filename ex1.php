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
