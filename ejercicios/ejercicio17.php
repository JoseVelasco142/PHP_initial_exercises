<div class="col-xs-4 enunc">
    <p>17. A la hora de registrar fechas en una tabla MySQL, &eacute;stas requieren ser insertadas en el formato &quot;aaaa-mm-dd&quot; para mysql, y por lo general nosotros utilizamos el formato &quot;dd/mm/aaaa&quot;.</p>
    <p>Realice una funci&oacute;n php que reciba la fecha en el formato habitual y la convierta a formato mysql</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Fecha</label>
        <input type="text" class="input-lg col-xs-4" name="fecha" value="En formato dd/mm/aaaa" onclick="this.value = ''"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Convertir fecha" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
       $fecha = $_POST['fecha'];

        if($fecha != 'En formato dd/mm/aaaa'){
            invetirFecha($fecha);
        }else{
            echo "Debes de escribir una fecha";
        }
    }

    function invetirFecha($fecha){
        $partes = explode('/', $fecha);
        echo "La fecha en formato MySQL es " . $partes[2] . "-" . $partes[1 ] ."-". $partes[0]  ;
    }
    ?>
</div>