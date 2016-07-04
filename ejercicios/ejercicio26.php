<style>
    .ejercicio{
        padding-top:0;
        height: 300px;
    }
    #form{
        border:1px solid black;
        height: 280px;
    }
    #azul{
        font-size: 1.5em;
        font-weight: bolder;
        color:dodgerblue;
        padding: 1%;
    }
    #bloque{
        border:1px dotted black;
    }
    .texto{
        font-weight: bolder;
        text-align: center;
        margin-top: 3%;
    }
</style>

<div class="col-xs-2 enunc">
    <p>26. Hacer el ejercicio anterior en un solo fichero</p>
</div>

<div class="col-xs-10 ejercicio">
    <div class="col-xs-12" id="form">
        <div class="col-xs-12" id="azul">Formulario simple</div>
        <div class="col-xs-12">B&uacute;squeda de canciones</div>

        <div class="col-xs-12" id="bloque">
            <form method="post">
                <label class="col-xs-4">Texto a buscar:</label>
                    <input type="text" class="col-xs-6" name="texto"/>
                <div style="clear: both;"></div>
                <label class="col-xs-4">Buscar en:</label>
                    <input type="radio" name="estilo" value="titulos">T&iacute;tulos de canci&oacute;n&nbsp;&nbsp;
                    <input type="radio" name="estilo" value="nombres de canci&oacute;n">Nombres de &aacute;lbum&nbsp;&nbsp;
                    <input type="radio" name="estilo" value="titulos y nombres de canci&oacute;n" checked="checked">Ambos campos
                <div style="clear: both;"></div>
                <label class="col-xs-4">G&eacute;nero musical:</label>
                    <select name="genero">
                        <option value="Todos">Todos</option>
                        <option value="Ac&uacute;stica">Ac&uacute;stica</option>
                        <option value="Banda sonora">Banda sonora</option>
                        <option value="Blues">Blues</option>
                        <option value="Electr&oacute;nica">Electr&oacute;nica</option>
                        <option value="Folk">Folk</option>
                        <option value="Jazz">Jazz</option>
                        <option value="New age">New age</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                    </select>
                <div style="clear: both;"></div>
                <input type="submit" name="buscar" value="Buscar">
            </form>
        </div>
    </div>
</div>

<div class="col-xs-10 resultado">
<?php
    if(isset($_POST['buscar'])){
        $texto = $_POST['texto'];
        $donde = $_POST['estilo'];
        $genero = $_POST['genero'];

        if(!empty($texto)){ ?>
        <div style="font-size: 1.2em; font-weight: bolder; color:mediumblue">Formulario simple. Resultados del formulario</div>
        <div >
            <br />
            <div>Estos son los datos introducidos</div>
            <ul>
                <li> Texto de b&uacute;squeda : <?=$texto?></li>
                <li> Buscar en : <?=$donde?></li>
                <li> G&eacute;nero : <?=$genero?></li>
            </ul>
            <a href="/EjerciciosDeRepaso/?view=26">[ Nueva b&uacute;squeda ]</a>
        </div>
        <?php
        }else{
            echo "<div class='col-xs-12 texto'>Debes de escribir algo </div>";
        }
    }
?>






</div>