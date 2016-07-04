<style>
    input{
        margin-left: 5%;
    }
</style>
<div class="col-xs-4 enunc">
    <p>29. Introducir un numero variable de datos dados por el usuario y calcular su suma</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post" class="col-xs-12">
        <label class=" label col-xs-4">N&uacute;mero de elementos : </label>
        <input type="text"  class="col-xs-2 input-sm" name="cantidad"/>
        <input type="submit"  class="col-xs-2 btn" name="aceptar" value="Aceptar"/>


    </form>

    <?php
    if(isset($_POST['aceptar'])) {
        $cantidad = $_POST['cantidad'];
        if(!empty($cantidad)) {
            if (is_numeric($cantidad)) {
                if($cantidad <= 5) {
                    echo "<form method='post'>";
                    for ($i = 1; $i <= $cantidad; $i++) {
                        echo "<a class='col-xs-1'>$i</a> <input type='text'  class='col-xs-10 input-sm' name='valor[]'/>";
                    }
                    echo "<input type='submit'  class='col-xs-10 btn' name='calcular' value='Calcular'/>";
                    echo "</form>";
                }else{
                    echo "M&aacute;s de 5 se sale de la p&aacute;gina.";
                }
            } else {
                echo "Introduce un n&uacute;mero, no letras";
            }
        }else{
            echo "Debes de introducir un n&uacute;mero";
        }
    }
    ?>

</div>

<div class="col-xs-8 resultado">
<?php
if(isset($_POST['calcular'])) {
    $numeros = $_POST['valor'];
    $resultado = 0;
    echo "<div style='font-weight: bolder;'>La suma de los  " . count($numeros) . " numeros es";
    foreach ($numeros as $val) {
        $resultado = $resultado + $val;
    }
    echo " $resultado</div>";
}
?>

</div>