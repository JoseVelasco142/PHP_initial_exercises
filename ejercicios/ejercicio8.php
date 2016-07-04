<div class="col-xs-4 enunc">
    <p>8. Realiza una p&aacute;gina que saque por pantalla los a&ntilde;os que han sido bisiestos entre dos a&ntilde;os. (usa chekdate)</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
    <label class="label col-xs-6">A&ntilde;o 1</label>
        <input type="text" class="input-lg col-xs-4" name="an1"/>
        <label class="label col-xs-6">A&ntilde;o 2</label>
        <input type="text" class="input-lg col-xs-4" name="an2"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $a1 = $_POST['an1'];
        $a2 = $_POST['an2'];

        if(!empty($a1) && !empty($a2)) {
            if(ctype_digit($a1) && ctype_digit($a2) ){
                if($a1 > $a2){
                    $mayor = $a1;  $menor = $a2;
                }else{
                    $mayor = $a2; $menor = $a1; }

                if( checkdate( 1, 1, $menor) && checkdate( 1, 1, $mayor) ){
                    echo "<div class='col-xs-12'>Entre ". $menor . " y " . $mayor . " los a&ntilde;os bisiestos son: </div>";
                    while($menor < $mayor){
                        if(((($menor%4 == 0) && ($menor%100)) || $menor%400 == 0)? true: false){
                                echo "<div class='col-xs-1'>".$menor ."</div>";
                        }
                        $menor++;
                    }
                }else{
                    echo "Alguno de los a&ntilde;os es erroneo";
                }
            } else { echo "Debes introducir  n&uacute;meros, no letras"; }
        }else{ echo "Debes de rellenar los 2 campos"; }
    }
    ?>
</div>