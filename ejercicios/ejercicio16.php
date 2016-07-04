<div class="col-xs-4 enunc">
    <p>16. Dada la frase &quot;Bienvenidos a la aventura de aprender PHP &quot; utilizar funciones de cadena para :<br />
        &#61623; Mostrar la parte central de la frase<br />
        &#61623; Averiguar la posici&oacute;n de la palabra PHP<br />
        &#61623; Reemplazar la palabra &quot;aventura&rdquo;&quot; por la cadena '<b>misi&oacute;n</b>'</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-10" value="Lanzar" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $frase = "Bienvenidos a la aventura de aprender PHP";

        $centro = substr($frase, (strlen($frase)/2)-3 , 6);

        echo "Los 6 caracteres centrales son: " . $centro . "<br />";

        $partes = explode(" ", $frase);
        foreach ($partes as $key=>$value) {
            if ($value === "PHP"){
                echo "La palabra ". $value . " se encuentra en la posici&oacute;n " . ($key + 1) . "<br />";
            }
        }

        $reemplazo = str_replace('aventura', 'misi&oacute;n', $frase);
        echo $reemplazo;
    }
    ?>
</div>