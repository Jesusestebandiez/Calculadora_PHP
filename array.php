<?php
$color = ['negro', 'rojo', 'verde', 'amarrillo'];
echo implode(',',$color);
natcasesort($color);
?>

<ul>
    
<?php
foreach($color as $c) {
    echo 
    "<li>
    $c
    </li>"
    ;
}

?>
</ul>