<style>
    p{font-size:0.9em; }
    .ejercicio{
        height: 560px;;
    }
</style>
<div class="col-xs-4 enunc">
    <p>23. Escriba un programa que muestre una tabla cuadrada con casillas de verificaci&oacute;n dentro de cada celda y cuente las casillas marcadas. El programa constar&aacute; de tres p&aacute;ginas:<br />
        &#61623; En la primera p&aacute;gina se solicita el tama&ntilde;o de la tabla.(con un l&iacute;mite de 10)<br />
        &#61623; En la segunda p&aacute;gina se dibuja la tabla con el n&uacute;mero de filas y columnas expresado en la p&aacute;gina anterior. Cada celda tendr&aacute; una casilla de verificaci&oacute;n y un n&uacute;mero que la identifique. Tabla de 4x4<br />
        &#61623; La tercera p&aacute;gina indicar&aacute; que celdas han sido marcadas por el usuario.<br />
        &#61623; En la tercera p&aacute;gina se indican los n&uacute;meros de las casillas de verificaci&oacute;n marcadas.</p>
    <img src="imgs/ejercicio23.jpg" />
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-10">Tama&ntilde;o de la tabla (max. 10)</label>
        <input type="text" class="input-lg col-xs-2" name="cantidad"/>
        <input type="submit" class="btn btn-default col-xs-12" value="Generar" name="generate" />
    </form>
    <?php
        if(isset($_POST['generate'])) {
            $cantidad = $_POST['cantidad'];
            header("Location: ejercicios/ejercicio23extra.php?cantidad=$cantidad");
        }
    ?>
</div>

