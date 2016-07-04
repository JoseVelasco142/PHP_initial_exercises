<div class="col-xs-4 enunc">
    <p>6. Dados dos n&uacute;meros enteros positivos, comprobar para cada uno de los n&uacute;meros que hay entre ellos,<br />
        si es m&uacute;ltiplo de 2 y/o de 3. En caso de que lo sea, que saque un mensaje y al final que indique cuantos m&uacute;ltiplos de 2,<br />
        de 3 y de ambos hay.</p>
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
        $muldos = 0;
        $multres = 0;
        $multdual = 0;

        if(!empty($n1) && !empty($n2)) {
            if(ctype_digit($n1) && ctype_digit($n2) ){
                if($n1 > $n2){
                    $mayor = $n1;  $menor = $n2;
                }else{
                    $mayor = $n2; $menor = $n1; }

                echo "<div style='text-align: center;' class='col-xs-6'>El n&uacute;mero mayor es: " . $mayor . "</div>";
                echo "<div style='text-align: center;' class='col-xs-6'>El n&uacute;mero menor es: " . $menor . "</div>";

                while($menor <= $mayor) {
                    if($menor % 2 ==0){$muldos++;}
                    if($menor % 3 ==0){$multres++;}
                    if($menor % 2 ==0 && $menor % 3 ==0){$multdual++;}
                    $menor++;
                }
                echo "<div>Existen : " . $muldos . " m&uacute;ltiplos de 2.</div><br>";
                echo "<div>Existen : " . $multres . " m&uacute;ltiplos de 3.</div><br>";
                echo "<div>Existen : " . $multdual . " m&uacute;ltiplos de 2 y de 3 a la vez .</div><br>";

            } else { echo "Debes introducir  n&uacute;meros, no letras"; }
        }else{ echo "Debes de rellenar los 2 campos"; }
    }
    ?>
</div>