<div class="col-xs-4 enunc">
    <p>1. Dados tres n&uacute;meros enteros determinar cu&aacute;l es el mayor.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Numero1</label>
        <input type="text" class="input-lg col-xs-4" name="n1"/>

        <label class="label col-xs-6">Numero2</label>
        <input type="text" class="input-lg col-xs-4" name="n2"/>

        <label  class="label col-xs-6">Numero3</label>
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

        if(!empty($num1) && !empty($num2) && !empty($num3)) {
            if (ctype_digit($num1) && ctype_digit($num2) && ctype_digit($num3)) {
                $num1 > $num2 ? $mayor = $num1 :  $mayor = $num2;
                $num3 > $mayor ? $mayor = $num3 : null;

                echo "El numero mayor es: " . $mayor;
            }
            else { echo "Debes introducir n&uacute;meros, no letras"; }
        }else{  echo "Debes de rellenar todos los campos"; }


    }
?>
</div>


