<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 141</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
// Exercice 1
for ($i = 0; $i <= 10; $i++) {
    echo "<p>La variable vaux $i</p>";
};

// Exercice 2
$maVar1 = 0;
$maVar2 = 3;

for ($maVar1 = 0; $maVar1 <= 20; $maVar1++) {
    echo "<p>$maVar1 * $maVar2</p>" . "<br>";
};

// Exercice 3
$maVar3 = 100;
$maVar4 = 5;

for ($maVar3 = 100; $maVar3 >= 10; $maVar3--) {
    echo "<p>$maVar3 * $maVar4</p>";
};

// Exercice 4
$maVar5 = 1;

while ($maVar5 <= 10) {
    $maVar5 += 0.5;
    echo "$maVar5" . "<br>";
};

// Exercice 5
for ($i = 1; $i <= 15; $i++) {
    echo "<p>On y arrive presque</p>";
};

// Exercice 6
for ($i = 20; $i >= 0; $i--) {
    echo "<p>C'est presque bon</p>";
};

// Exercice 7
$maVar6 = 1;

while ($maVar6 <= 100) {
    $maVar6 += 15;
    echo "<p>On tient le bon bout</p>";
};

// Exercic 8
while ($i <= 200) {
    $i += 12;
    echo "<p>Enfin !</p>";
}

?>

</body>
</html>