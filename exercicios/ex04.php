<form method="get" action="ex04.php">

    <label for="num1">valor : </label>
        <input type="number" name="num1" required>
        <br><br>

    
    <input type="submit" value="VER">

</form>

<?php
if(!isset($_GET['num1'])){
    return;
}

$valor = (float) $_GET['num1'];
$total = (($valor*16)/100)+$valor;

echo "Valor total: {$total}<br>Parcelas de 10: " . ($total / 10);


?>