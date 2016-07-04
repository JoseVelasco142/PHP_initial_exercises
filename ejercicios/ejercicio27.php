<div class="col-xs-4 enunc">
    <p>27. Hacer un conversor de euro a pesetas o a d&oacute;lares El usuario introducir&aacute; la cantidad y la moneda en un formulario</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Euros</label>
            <input type="text" class="input-lg col-xs-4" name="euros"/>
        <label class="label col-xs-6">Convertir a: </label>
            <select name="moneda" class="input-lg col-xs-4">
                <option value="pesetas">Pesetas</option>
                <option value="dolares">Dolares</option>
            </select>
        <div class="col-xs-12" style="padding-bottom: 3%;"></div>
        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $cantidad = $_POST['euros'];
        $moneda = $_POST['moneda'];
        if(!empty($cantidad)){
            if(is_numeric($cantidad)){
                switch($moneda){
                    case 'pesetas':
                        $resultado = $cantidad * 166.386;
                        break;
                    case 'dolares':
                        $resultado = $cantidad * 1.0831;
                        break;
                }
                echo "<div class='col-xs-12'>$cantidad &#8364;uros son $resultado $moneda</div>";
            }else{
                echo "<div class='col-xs-12'>Introduce n&uacute;meros, no letras</div>";
            }
        }else{
            echo "<div class='col-xs-12'>Debes de introducir una cantidad </div>";
        }

    }
    ?>
</div>
