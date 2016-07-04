<style>
    td{
        padding: 1%;
    }
</style>

<div class="col-xs-4 enunc">
    <p>19. Cree un array de dos dimensiones. De manera que en una dimensi&oacute;n contenga el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo.<br />
        Y escriba una tabla como la siguiente recorriendo el array:</p>
    <img src="imgs/ejercicio19.jpg" style="width: 300px;" />
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-10" value="Crear tabla" name="lanzar" />

    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    $colores = array (
                    'colores fuertes' => array("rojo"=>"FF0000", "verde"=>"00FF00", "azul"=>"0000FF"),
                    'colores suaves' => array("rosa"=>"FE9ABC", "amarillo"=>"FDF189", "malva"=>"BC8F8F")
                     );


    if(isset($_POST['lanzar'])){ ?>

    <table class="table table-bordered">
    <?php foreach($colores as $tipo => $color) { ?>
            <tr>
                <td><?= $tipo; ?></td>
        <?php foreach ($color as $name => $valor) { ?>
                <td style="background:<?="#".$valor; ?>"><?= $name.":".$valor; ?></td>
        <?php } ?>
            </tr>
    <?php } ?>
    </table>

<?php } ?>

</div>