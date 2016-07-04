<div class="col-xs-4 enunc">
    <p>12. Funci&oacute;n que acepte 1,2 o 3 argumentos enteros y devuelva la media de los argumentos</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">N&uacute;mero 1</label>
        <input type="text" class="input-lg col-xs-4" name="n1"/>
        <label class="label col-xs-6">N&uacute;mero 2</label>
        <input type="text" class="input-lg col-xs-4" name="n2"/>
        <label class="label col-xs-6">N&uacute;mero 3</label>
        <input type="text" class="input-lg col-xs-4" name="n3"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $num3 = $_POST['n3'];
        media($num1, $num2, $num3);
    }

    function media($n1, $n2, $n3){
        $arguments = 0;

        if ((ctype_digit($n1) || empty($n1)) && (ctype_digit($n2) || empty($n2)) && (ctype_digit($n3) || empty($n3))) {
            !empty($n1) ? $arguments++ : $n1 = 0;
            !empty($n2) ? $arguments++ : $n2 = 0;
            !empty($n3) ? $arguments++ : $n3 = 0;

            if ($arguments >= 2) {
                $media = ($n1 + $n2 + $n3) / $arguments;
                echo "La media de los n&uacute;meros que has introducido es: " . $media;

            } else { echo "Debes de introducir al menos 2 n&uacute;meros para calcular una media"; }
        } else {echo "Debes introducir n&uacute;meros, no letras"; }
    }
    ?>
</div>