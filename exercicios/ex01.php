<form type="get" action="ex01.php">
    <label for="num1">km :</label>
    <input type="number" name="num1" require><br><br>

    <label for="num2">litros: </label>
    <input type="number" name="num2" require><br><br>

    <input type="submit" value="mandar">
</form>

<?php
if(!isset($_GET['num1']) || ! isset($_GET['num2'])){
    return;
}

$km = $_GET['num1'];
$litros = $_GET['num2'];

$media = (float) $km / $litros; 

echo "media: {$media}";
?>