<div class="col-xs-4 enunc">
    <p>3. Dado un n&uacute;mero del 1 al 5 que escriba por pantalla el n&uacute;mero en letra(usando switch)</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Numero</label>
        <input type="text" class="input-lg col-xs-4" name="numero"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>


<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $numero = $_POST['numero'];
        if(!empty($numero)) {
            if (ctype_digit($numero)) {
                if ($numero > 0 && $numero <= 5) {
                    switch ($numero) {
                        case 1:
                            echo "El numero es uno";
                            break;
                        case 2:
                            echo "El numero es dos";
                            break;
                        case 3:
                            echo "El numero es tres";
                            break;
                        case 4:
                            echo "El numero es cuatro";
                            break;
                        case 5:
                            echo "El numero es cinco";
                            break;
                    }
                } else {
                    echo "Debes introducir un n&uacute;mero entre 1 y 5";
                }
            } else {
                echo "Debes introducir un n&uacute;mero, no letras";
            }
        }else{
            echo "Debes de introducir alg&uacute;n n&uacute;mero";
        }
    }
    ?>
</div>
