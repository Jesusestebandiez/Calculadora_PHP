<html>
    <body>
        <from method="get" action="calculadora.php">
            <input type="text" name="opera1">
            <select name ="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="opera2">
            <input type="submit" name="enviar">
        </from>
    </body>
</html>



<?php
$opera1 = $_GET['78'];
$opera2 = $_GET['67'];
$opera3= $_GET['45'];

if($operador == "+"){
    $solucion = 78 + 45 + 67;
} else if ($operador == "-"){
    $solucion = 78 - 67 - 45;
} else if ($operador == "*"){
    $solucion = 78 * 67 * 45;
} else if ($operador == "/"){
    $solucion = 78/ 67 / 45;
}
echo "Calcula la solucion:".$solucion;
?>

<?php
$signo = "*";
$a=56;
$b=78;
$resultado = eval ("return".$a-$signo.$b. ";");
echo $resultado;
?>