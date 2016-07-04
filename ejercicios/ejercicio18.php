<div class="col-xs-4 enunc">
    <p>18. Crear un array $dias con los d&iacute;as de la semana<br />
        &#61623; mostrar todas sus parejas indices / valores mediante el bucle foreach<br />
        &#61623; Mostrar el contenido del array con la funci&oacute;n print_r<br />
        &#61623; Mostrar el contenido del array con la funci&oacute;n implode</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-10" value="Parejas/indices" name="pi" />
        <input type="submit" class="btn btn-default col-xs-10" value="Print_r" name="pr" />
        <input type="submit" class="btn btn-default col-xs-10" value="Implode" name="im" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    $array = array("lunes", "martes", "miercoles", "jueves" , "viernes" , "sabado" , "domingo");

    if(isset($_POST['pi'])){
        foreach ($array as $key=>$value) {
            echo "<div class='col-xs-4'>Clave ". $key . "=>" . $value . "</div>";
        }
    }

    if(isset($_POST['pr'])){
       print_r($array);
    }

    if(isset($_POST['im'])){
        $con_comas = implode(",", $array);
        echo $con_comas;
    }
    ?>
</div>