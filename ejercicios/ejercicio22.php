<div class="col-xs-4 enunc">
    <p>22. Obtenga el n&uacute;mero de valores iguales al valor 2 contenidos en un array de 10 valores generados aleatoriamente con valores de 1 a 10</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-12" value="Generar y buscar" name="generate" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    $numeros = array();
    $valor = 2;
    $count = 0;

    if(isset($_POST['generate'])) {

        for ($i = 1; $i <= 10; $i++) {
            array_push($numeros, rand(1, 10));
        }
        echo "<div class='col-xs-12'>Los n&uacute;meros generados son: </div>";
        foreach ($numeros as $val) {
            echo "<div class='col-xs-1'>$val</div>";
        }
        echo "<div class='col-xs-12'>------------------------------------------------------------------------------</div>";
        foreach ($numeros as $val) {
            if( ($val == $valor)) {
                $count++;
            }
        }
        echo "<div class='col-xs-12'>El n&uacute;mero '2' se encuentra $count veces en el array</div>";
    }
    ?>

</div>
