<form type="get" action="ex02.php">

    <label for="num1">comprimento: </label>
    <input type="number" name="num1" require><br><br>

    <label for="num2">largura: </label>
    <input type="number" name="num2" require><br><br>

    <label for="num2">altura: </label>
    <input type="number" name="num3"><br><br>

    <input type="submit" value="mandar">

</form>

<?php
if(!isset($_GET['num1']) || !isset($_GET['num2']) || !isset($_GET['num3'])){
    return;
}

$comprimento = $_GET['num1'];
$largura = $_GET['num2'];
$altura = $_GET['num3'];

$volume = (float) $comprimento*$largura*$altura;

echo "volumo {$volume}";

?>