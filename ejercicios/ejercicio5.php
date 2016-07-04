<div class="col-xs-4 enunc">
    <p>5. Dado dos n&uacute;meros enteros positivos, mostrar en pantalla los n&uacute;meros pares que se pueden encontrar entre esos dos n&uacute;meros.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">N&uacute;mero 1</label>
        <input type="text" class="input-lg col-xs-4" name="numero1"/>
        <label class="label col-xs-6">N&uacute;mero 2</label>
        <input type="text" class="input-lg col-xs-4" name="numero2"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>


<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];

        if(!empty($n1) && !empty($n2)) {
            if(ctype_digit($n1) && ctype_digit($n2) ){
                if($n1 > $n2){
                    $mayor = $n1;  $menor = $n2;
                }else{
                    $mayor = $n2; $menor = $n1; }

                echo "<div style='text-align: center;' class='col-xs-6'>El numero mayor es: " . $mayor . "</div>";
                echo "<div style='text-align: center;' class='col-xs-6'>El numero menor es: " . $menor . "</div>";
                echo "<div style='text-align: center;' class='col-xs-12'>Los pares entre " . $mayor . " y ".$menor ." son: </div></br>";

                while($menor <= $mayor) {
                    $menor % 2 != 0 ? $menor++ : null;
                    echo "<div class='col-xs-1'>" . $menor . "</div>";
                    $menor++;
                    }

            } else { echo "Debes introducir  n&uacute;meros, no letras"; }
        }else{ echo "Debes de rellenar los 2 campos"; }
    }
    ?>
</div>