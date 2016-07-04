<div class="col-xs-4 enunc">
    <p>28. Usando un formulario, cargar una lista de 8 elementos en un array e imprimir su sumatoria</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <div class="col-xs-6">
            <a class="col-xs-2">0</a> <input type="text"  class="col-xs-10 input-sm" name="n1"/>
            <a class="col-xs-2">1</a> <input type="text"  class="col-xs-10 input-sm" name="n2"/>
            <a class="col-xs-2">2</a> <input type="text"  class="col-xs-10 input-sm" name="n3"/>
            <a class="col-xs-2">3</a> <input type="text"  class="col-xs-10 input-sm" name="n4"/>
        </div>
        <div class="col-xs-6">
            <a class="col-xs-2">4</a> <input type="text"  class="col-xs-10 input-sm" name="n5"/>
            <a class="col-xs-2">5</a> <input type="text"  class="col-xs-10 input-sm" name="n6"/>
            <a class="col-xs-2">6</a> <input type="text"  class="col-xs-10 input-sm" name="n7"/>
            <a class="col-xs-2">7</a> <input type="text"  class="col-xs-10 input-sm" name="n8"/>
        </div>

        <input type="submit" class="btn btn-default col-xs-12" value="Enviar" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $n5 = $_POST['n5'];
        $n6 = $_POST['n6'];
        $n7 = $_POST['n7'];
        $n8 = $_POST['n8'];
        $resultado = 0;

        if (!empty($n1) && !empty($n2) && !empty($n3) && !empty($n4) && !empty($n5) && !empty($n6) && !empty($n7) && !empty($n8)) {
            if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3) && is_numeric($n4) && is_numeric($n5) && is_numeric($n6) && is_numeric($n7) && is_numeric($n8)) {

                $array = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];

                foreach($array as $valor){
                    $resultado = $resultado + $valor;
                }
                echo "<div class='col-xs-12'>La suma de $n1, $n2, $n3, $n4, $n5, $n6, $n7 y $n8 </div>";
                echo "<div class='col-xs-12'>Es: $resultado.</div> ";

            } else {
                echo "<div class='col-xs-12'>Introduce n&uacute;meros, no letras</div>";
            }
        } else {
            echo "<div class='col-xs-12'>No puede dejar los campos vacios</div>";
        }
    }
    ?>
</div>

