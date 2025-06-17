<form method="get" action="ex03.php">

    <label for="num1">base menor: </label>
        <input type="number" name="num1" required>
        <br><br>

        <label for="num2">base maior: </label>
        <input type="number" name="num2" required>
        <br><br>

        <label for="num3">altura: </label>
        <input type="number" name="num3" required>
        <br><br>
    
    <input type="submit" value="VER">

</form>

<?php
if (!isset($_GET['num1']) || !isset($_GET['num2']) || !isset($_GET['num3'])) {
    return;
}

$baseMe = $_GET['num1'];
$baseMai = $_GET['num2'];
$altura = $_GET['num3'];

$area = (($baseMe + $baseMai) * $altura) / 2;


echo "a area é: {$area}";

?>