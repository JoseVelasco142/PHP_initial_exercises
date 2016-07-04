<div class="col-xs-4 enunc">
<p>30. Realizar una p&aacute;gina web llamada alumno.html que contenga un formulario con el siguiente esquema:<br />
    Donde el alumno pueda introducir su nombre, su tel&eacute;fono de contacto, si est&aacute; actualmente matriculado, y en qu&eacute; tipo de ense&ntilde;anza. Adem&aacute;s elegir&aacute; si quiere simplemente mostrar sus datos por pantalla o prefiere que se guarden en un archivo en disco llamado datos.txt.<br />
    Al pulsar sobre el bot&oacute;n &ldquo;Enviar datos&rdquo;, cargar&aacute; la p&aacute;gina datos_alumno.php que recibir&aacute; los datos introducidos en el formulario y la forma de mostrar los datos.<br />
    Si se eligi&oacute; mostrar por pantalla mostrar&aacute; por ejemplo lo siguiente:<br />
    &ldquo;El alumno Felipe R&iacute;os V&aacute;zquez, con tel&eacute;fono 955979999, est&aacute; matriculado en un ciclo superior&rdquo;<br />
    Si se eligi&oacute; que se almacenara en un fichero, deber&aacute; guardarse la misma informaci&oacute;n pero en el fichero del disco &ldquo;datos.txt&rdquo; (en la misma carpeta donde est&aacute; el fichero datos_alumno.php).</p>

</div>

<div class="col-xs-8 ejercicio">
    <form method="POST" action="ejercicios/datos_alumno.php">
        <div class="col-xs-12" style="font-weight: bolder; font-size: 1.2em;">DATOS DEL ALUMNO:</div>
        <br />
        <div class="col-xs-12">
            <div class="col-xs-6">
                <a class="col-xs-4">Nombre </a>
                <input type="text" name="nombre" class="input-sm col-xs-8">
                <a class="col-xs-4">Tel&eacute;fono</a>
                <input type="text" name="telefono" class="input-sm col-xs-3">
                <a class="col-xs-3">Matriculado</a>
                <input type="checkbox" name="matriculado" checked="checked" class="col-xs-1">
            </div>
            <div class="col-xs-6">
                <a class="col-xs-12">Ense&ntilde;anza:</a>
                <br>
                <input type="radio" class="col-xs-2" value="Secundaria" name="ensenanza">
                <a class="col-xs-4">Secundaria</a>
                <input type="radio" class="col-xs-2" value="Bachillerato" name="ensenanza">
                <a class="col-xs-4">Bachillerato</a>
                <input type="radio" class="col-xs-2" value="Ciclo medio" name="ensenanza">
                <a class="col-xs-4">Ciclo medio</a>
                <input type="radio" class="col-xs-2" value="Ciclo superior" name="ensenanza">
                <a class="col-xs-4">Ciclo superior</a>
            </div>
            <div class="col-xs-12">
            <a>Mostrar datos:</a>
                <select size="1" name="mostrar">
                    <option selected>Por Pantalla</option>
                    <option>En fichero</option>
                </select>
            </div>
            <input type="submit" value="Enviar datos" name="enviar">
        </div>
    </form>
</div>