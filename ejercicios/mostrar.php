<style>
    html{
        background: black;
    }
    #bloque{
        margin: 10%;
        height: 250px;
        background: white;
        padding: 5%;
        font-size: 1.2em;
        font-weight: bolder;

    }

</style>
<div id="bloque">
<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 10/10/2015
 * Time: 0:01
 */
$fichero="datos.txt";
if($dfichero = fopen($fichero,"r")){
    while (!feof($dfichero)) {
        $texto=fread($dfichero,10);
        echo $texto;
    }
    fclose($dfichero);
}
else{
    echo "ERROR: Imposible abrir fichero $fichero para lectura.";
}
?>
</div>
