<style>
    .enunc{
        padding: 0.1%;
    }
    img{
        width: 400px;
    }
    #form{
        border:1px solid black;
        height: 400px;
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
        font-size: 1.2em;
        text-align: center;
        margin-top: 3%;
    }
</style>

<div class="col-xs-4 enunc">
    <p>24. Cree un Formulario como el siguiente</p>
    <img src="imgs/ejercicio24.jpg" />
</div>

<div class="col-xs-8 ejercicio">
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
        <?php
        if(isset($_POST['buscar'])){
            $texto = $_POST['texto'];
            $donde = $_POST['estilo'];
            $genero = $_POST['genero'];

            if(!empty($texto)){
                header("Location: ejercicios/ejercicio24resultado25.php?texto=$texto&donde=$donde&genero=$genero");
            }else{
                echo "<div class='col-xs-12 texto'>Debes de escribir algo </div>";
            }
        }
        ?>
    </div>
</div>


