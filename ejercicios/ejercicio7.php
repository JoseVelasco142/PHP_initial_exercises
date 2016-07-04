<div class="col-xs-4 enunc">
    <p>7. Realiza una p&aacute;gina que pida la fecha de nacimiento y calcule la edad.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Fecha de nacimiento</label>
        <input type="text" class="input-lg col-xs-4" name="fecha" value="En formato dd/mm/aaaa" onclick="this.value = ''"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
<?php
    if(isset($_POST['calcular'])) {
        $fecha =  $_POST['fecha'];

        $currentdate = date("j/n/Y");
        $splittedcurrentdate  = explode("/", $currentdate);


        if($fecha != "En formato dd/mm/aaaa") {
            $splittedfecha = explode("/", $fecha);
            $years = $splittedcurrentdate[2] - $splittedfecha[2];

            if (($splittedfecha[0] < 1 || $splittedfecha[0] > 31) || ($splittedfecha[1] < 1 || $splittedfecha[1] > 12) || ($splittedfecha[2] < 1900 || $splittedfecha[2] > 2015)) {
                echo "Has introducido una fecha err&oacute;nea";

            } else {
                if (($splittedcurrentdate[1] < $splittedfecha[1])) {
                    $years--;
                } elseif ($splittedcurrentdate[1] == $splittedfecha[1]) {
                    if (($splittedcurrentdate[0] < $splittedfecha[0])) {
                        $years--;
                    } elseif ($splittedcurrentdate[0] == $splittedfecha[0]) {
                        echo " Hoy es tu cumple" . "<br />";
                    }
                }
                echo "Tienes " . $years . " a&ntilde;os";
            }
        }else{  echo "Debes de introducir una fecha"; }
    }
?>
</div>