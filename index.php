<?php 

require_once 'calculator.php';

$a = array(
    "Groupe A" => array(
        "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"
    ),
    "Groupe B" => array(
        "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
        "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""
    ),
    "Groupe C" => array(
        "", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation"
        )
    );

    
echo '<table style="border:1px solid #000;">';
echo '<tr><td>&nbsp;</td>';
for($i = 1; $i <= 23; $i++){
    echo '<td style="border:1px solid #000;">Semaine '.$i.'</td>';
}
echo '</tr>';
foreach($a as $key => $val){
    echo '<tr><td style="border:1px solid #000;">'.$key.'</td>';
    for($i = 1; $i <= 23; $i++){
        $value = "";
        if($val[$i] != null){
            $value = $val[$i];
        }
        echo '<td style="border:1px solid #000;">'.$value.'</td>';
    }
    echo '</tr>';
}

echo '</table>';
echo '<br>';
echo 'Trouver la position de la dernière semaine de stage pour le Groupe A';
echo '<br>';
$lastWeekStage = 0;
for($i = 1; $i <= 23; $i++){
    if($a["Groupe A"][$i] == "Stage"){
        $lastWeekStage = $i;
    }
}
echo $lastWeekStage;
echo '<br>';
echo '<br>';
echo 'Extraire, dans un nouveau tableau, les codes des groupes.';
$tab = array();
foreach($a as $key => $val){
    array_push($tab, $key);
}
var_dump($tab);
echo '<br>';
echo '<br>';
echo 'Combien de semaines dure le stage du groupe Groupe C';
$compteur = 0;
foreach($a as $key => $val){
    if($key == "Groupe C"){
        foreach($val as $row){
            if($row == "Stage"){
                $compteur++;
            }
        }
    }
}
echo $compteur;
