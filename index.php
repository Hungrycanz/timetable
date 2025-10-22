
<?php
include('connection.php');
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hifz Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Quran Tracker</h1>
    <div class="cards">
        <div class="nopulse"><p><strong>Date</strong></p><span><?= $date->format('l, d F Y');?></span></div>
        <div class="nopulse"><p><strong>Week of the Month</strong></p><span><?= $weekOfMonth;?></span></div>
        <div class="nopulse"><p><strong>Section</strong></p><span><?= $currentSection['label'];?></span></div> 
        <div><p><strong>juz</strong></p><span><?=$currentSection['juz'];?></span></div>
    </div>  
    </div>
</body>
</html>