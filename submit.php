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
        <h2>Upload Your File & Choose Options</h2>
        <p>Select your formatted <strong>.fossil</strong> file and choose your display options below.</p>
        <form action="process.php" method="POST" enctype="multipart/form-data">
        <h4>Data File:</h4>
        <input type="file" name="fossil" class="file">
        <h4>Display Options:</h4>
        <input type="checkbox" name="color" class="check"> Color card border by diet<br>
        <input type="checkbox" name="exclude" class="check"> Exclude all species that are not dinosaurs<br>
        <input type="submit" name="submit" value="Process File" class="button">
    </form>
    </div>
<img class="jasper" src="Images/Jasper.png">

</body>
</html>