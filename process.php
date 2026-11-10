<!DOCTYPE html>
<html lang="en">
<head>
    <title>DINO-DECK</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="Images/Pachycephalosaurus.png">
</head>
<body>
    <div class="navbar">
        <span class="logo">DINO-DECK</span>
        <a href="index.php">HOME</a>
        <a href="submit.php">CREATE CARDS</a>
    </div>
<?php
$dietColors = ['Carnivore'=>'#c9184a', 'Herbivore'=>'#52b788', 'Omnivore'=>'#f48c06', 'Piscivore'=>'#023e8a', 'Default'=>'#6c757d'];
$notDinosaurs = ['Plesiosaur', 'Synapsid', 'Pterosaur', 'Ichthyosaur', 'Mosasaur'];    
if(isset($_POST['submit']) and !empty($_FILES['fossil']['tmp_name'])) {
    $lines = file($_FILES['fossil']['tmp_name']);
    foreach ($lines as $line) {
        $line = trim($line);
        if (preg_match('/^>/', $line)) {
            $pieces = explode(">", $line);
            $header = $pieces[1];
        } else {
            $sequence = $line;
            $parts = explode("|", $header);
            $name = $parts[0];
            $period = $parts[1];
            $size = $parts[2];
            $diet = $parts[3];
            $group = $parts[4];
            $location = $parts[5];
            $description = $parts[6];
            $nameParts = explode("_", $name);
            $genus = $nameParts[0];
            $species = $nameParts[1];
            if (isset($_POST['exclude']) and in_array($group, $notDinosaurs)) {
continue;
}
            if (isset($_POST['color'])) {
            $borderColor = $dietColors[$diet];
            } else {
            $borderColor = $dietColors['Default'];
}
            echo "<div class='card' style='border-color: " . $borderColor . ";'>";
            echo "<img src='Images/" . $genus . ".png'>";
            echo "<div class='dna'>" . $sequence . "</div>";
            echo "<div class='name'>" . $genus . " " . $species . "</div>";
            echo "<div class='info'>" . $size . " | " . $diet . "</div>";
            echo "<div class='info'>Era: " . $period . " | From: " . $location . "</div>";
            echo "<div class='desc'>" . $description . "</div>";
            echo "</div>";
        }
    }
}
?>








    <img class="jasper" src="Images/Jasper.png" title="These dinosaur cards look T-Rexcellent!">
</body>
</html>