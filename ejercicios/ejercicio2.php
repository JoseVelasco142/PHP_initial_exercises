<div class="col-xs-4 enunc">
    <p>2. Construye un programa tal, que dado como dato el sueldo de un trabajador, calcule su aumento seg&uacute;n el siguiente criterio.</p>
    <p>sueldo < $1000 ? aumento 25%</p>
    <p>sueldo >=1000 y sueldo <=$1500 ?aumento 21%</p>
    <p>sueldo> $1500 ?aumento 18%&quot;</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Sueldo</label>
        <input type="text" class="input-lg col-xs-4" name="sueldo"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Calcular" name="calcular" />
    </form>
</div>


<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $salario = $_POST['sueldo'];

        if(!empty($salario)) {
            if (ctype_digit($salario)) {
                if($salario < 1000 ){
                    $salarioA = $salario * 1.25;
                }elseif($salario >= 1000 && $salario <= 1500){
                    $salarioA = $salario * 1.21;
                }else{
                    $salarioA = $salario * 1.18;
                }

                echo "El salario incial era de :" . $salario ."<br />";
                echo "El salario aumentado es de :" .$salarioA;

            }
            else { echo "Debes introducir n&uacute;meros, no letras"; }
        }else{ echo "Debes introducir un valor"; }

    }
    ?>
</div>
