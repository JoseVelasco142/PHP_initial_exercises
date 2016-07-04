<?php

$colores = array (
    'colores fuertes' => ["rojo"=>"FF0000", "verde"=>"00FF00", "azul"=>"0000FF"],
    'colores suaves' => ["rosa"=>"FE9ABC", "amarillo"=>"FDF189", "malva"=>"BC8F8F"]
);

$coloresBuscados = ['FF88CC', 'FF0000'];

?>

<div class="col-xs-4 enunc">
    <p>20. Dado el array anterior compruebe si en &eacute;l se encuentra el color &ldquo;FF88CC&rdquo;y el color &ldquo;FF0000&rdquo; usando la funci&oacute;n in_array.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6" style="text-align: left">Valor 1 :  <?=$coloresBuscados[0];?></label>
        <label class="label col-xs-6" style="text-align: left">Valor 2 :  <?=$coloresBuscados[1];?></label>
        <input type="submit" class="btn btn-default col-xs-10" value="Buscar" name="lanzar" />

    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['lanzar'])) {
        foreach($coloresBuscados as $color) {
            foreach ($colores as $tipo) {
                if(in_array($color, $tipo)) {
                    echo "Encontrado $color";
                }
            }
        }
    }
    ?>
</div>
