<?php
$date= new DateTime();

function getWeekOfMonth($date){
    $firstDay=new DateTime($date->format('Y-m-01'));
    $dayOfMonth=(int)$date->format('j');
    $weekNumber= ceil(($dayOfMonth + $firstDay->format('N')-1)/7);
    return $weekNumber;
}
 
$weekOfMonth = getWeekOfMonth($date);
$sections=[
    1=>['label'=>'A', 'juz'=>'1-5'],
    2=>['label'=>'B', 'juz'=>'6-10'],
    3=>['label'=>'C', 'juz'=>'11-14'],
    4=>['label'=>'D', 'juz'=>'15-17'],
    5=>['label'=>'E', 'juz'=>'Revise'],
];
$currentSection = $sections[$weekOfMonth]?? $sections[5];
?>