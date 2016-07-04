<div class="col-xs-4 enunc">
    <p>14. Realizar una p&aacute;gina PHP en la que introduzca una frase en una variable y una letra .</p>
    <p> El script debe contar el n&uacute;mero de veces que aparece esa letra en la frase..</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-4">Frase</label>
        <input type="text" class="input-lg col-xs-8" name="frase"/>
        <label class="label col-xs-10">Letra</label>
        <input type="text" class="input-lg col-xs-2" name="letra"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Buscar letra" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $frase = strtolower ($_POST['frase']);
        $letra = strtolower ($_POST['letra']);

        if(!empty ($frase) && !empty($letra )) {
            if (ctype_alpha($letra)) {
                if (strpos($frase, $letra) !== false) {
                    echo "La letra '" . $letra . "' aparace ". substr_count($frase, $letra) . " veces en la frase '" . $frase . "'";
                }else{
                    echo "La letra '" . $letra . "' no aparace en la frase '" . $frase . "'";
                }
            } else { echo "Escribe una letra, no un n&uacute;mero";}
        }else{ echo "Rellena los dos campos";}
    }
    ?>
</div>