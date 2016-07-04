<div class="col-xs-4 enunc">
    <p>4. Escriba una calculadora del &iacute;ndice de masa corporal (imc) que conste de dos p&aacute;ginas.</p>
    <p> -  En la primera p&aacute;gina se solicitan el peso en kg y la altura en cm de una persona.<br/>
        - El peso debe ser un n&uacute;mero entero o decimal mayor que cero.<br/>
        - La altura debe ser un n&uacute;mero entero mayor que cero.<br/>
        - En la segunda p&aacute;gina se muestra el &iacute;ndice de masa corporal correspondiente (sin decimales).<br/>
        - La f&oacute;rmula del imc es: imc = peso / altura2 (peso en kilogramos y altura en metros).<br/>
        - Indicar la salida seg&uacute;n la tabla:</p>
    <img src="imgs/ejercicio3.jpg" style="height: 180px; width: 300px;"/>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Peso</label>
        <input type="text" class="input-lg col-xs-4" name="peso"/>

        <label class="label col-xs-6">Altura</label>
        <input type="text" class="input-lg col-xs-4" name="altura"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>


<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if(!empty($peso) && !empty($altura)) {
            if(is_numeric($peso) && ctype_digit($altura)){
                $altura = $altura /100;
                $imc = ($peso / (pow($altura, 2)));

            } else {  echo "Debes introducir un n&uacute;mero, no letras"; }
        }else{  echo "Debes de rellenar todos los campos"; }

        if(isset($imc) && !is_null($imc)) {
            echo "El indice de masa corporal es de: " . round($imc) . "<br />";
            echo "Clasificaci&oacute;n: ";
            switch ($imc) {
                case $imc <= 16:
                    echo "Infrapeso -- Delgadez severa";
                    break;
                case $imc >= 16 && $imc <= 16.99:
                    echo "Infrapeso -- Delgadez moderada";
                    break;
                case $imc >= 17 && $imc <= 18.49:
                    echo "Infrapeso -- Delgadez aceptable";
                    break;
                case $imc >= 18.5 && $imc <= 24.99:
                    echo "Normal";
                    break;
                case $imc >= 25 && $imc <= 29.99:
                    echo "Sobrepeso -- Preobeso";
                    break;
                case $imc >= 30:
                    echo "Obeso";
                    break;
            }
        }
    }
    ?>
</div>
