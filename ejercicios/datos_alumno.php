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
 * Date: 09/10/2015
 * Time: 22:21
 */
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $matriculado = isset($_POST['matriculado']);
    $ensenanza = $_POST['ensenanza'];
    $mostrar = $_POST['mostrar'];

    if(!empty($nombre) && !empty($telefono) && !empty($ensenanza)){

        $texto = "<div>El alumno " . $nombre . ", con tel&eacute;fono " . $telefono;

        if($matriculado){
            $texto .= ", est&aacute; matriculado en ".$ensenanza . "</div>";
        }
        else {
            $texto .= ", no est&aacute; matriculado" . "</div>";
        }

        if($mostrar =="Por Pantalla"){
            echo $texto;
        }
        else{
            $fichero="datos.txt";

            if($dfichero = fopen($fichero,"w")){
                fputs($dfichero,$texto);
                fclose($dfichero);

                echo "<br><a href='mostrar.php'>Mostrar archivo</a><br>";
            }
            else{

                echo "ERROR: No se puede abrir el fichero $fichero .<br>\n";
            }
        }

    }else{
        echo "Debes de rellenar todos los campos";
    }
}
?>
</div>