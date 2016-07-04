<div class="col-xs-4 enunc">
    <p>11. Funci&oacute;n que devuelva el cuadrado y el cubo de un n&uacute;mero dado.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">N&uacute;mero</label>
        <input type="text" class="input-lg col-xs-4" name="n"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $num = $_POST['n'];

        if(!empty($num)) {
            if (ctype_digit($num)) {
                $cuadrado = pow($num, 2);
                $cubo = pow($num, 3);

                echo "El cuadrado de " . $num . " es: " . $cuadrado;
                echo "<br />";
                echo "El cubo de " . $num . " es: " . $cubo;
            }
            else {  echo "Debes introducir un n&uacute;mero, no letras";  }
        }else{ echo "Debes de rellenar todos los campos"; }
    }
    ?>
</div>