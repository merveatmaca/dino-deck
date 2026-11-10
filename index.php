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

    <div class="content">
        <h2> Welcome to DINO-DECK Builder!</h2>
        <p> Create custom dinosaur cards by uploading a .fossil file with dinosaur DNA sequences.</p>
        <h3>Preparing Your Data File</h3>
        <p>Your <strong>.fossil</strong> file should have entries like:</p>
        <code>Genus_species|Period|Size|Diet|Group|Location|Description<br>SEQUENCE...</code>
        <p>The header line lists dinosaur info separated by pipes ("|"), followed by its DNA sequence on the next line.</p>
        <h4> Example Entry</h4>
        <code>Tyrannosaurus_rex|Late Cretaceous|12-13m long|Carnivore|Theropod|North America|Apex predator<br>ATCGCTAAGCATCGCTAAGCATCGCTAAGCATCGCTAAGC...</code>
        <h3> How It Works</h3>
        <p>The tool reads header details (period, size, diet, group, location, description) and shows them with the DNA and matching image.</p>
        <p>Images are chosen by the <strong>Genus</strong> name, e.g., <strong>Tyrannosaurus_rex</strong> shows <strong>Tyrannosaurus.png.</strong></p>
        <a class="button" href="submit.php">Generate Cards</a>
        
    </div>
    <img class="jasper" src="Images/Jasper.png">
</body>
</html>