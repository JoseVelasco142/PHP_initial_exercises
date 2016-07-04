<style>
    html{
        background: black;
    }
    #ej23{
        background: white;
        padding: 5%;
        margin: 5%;
        border:1px solid black;
    }
</style>
<form method="post">
    <input type="button" class="btn btn-default col-xs-6" value="Volver" onclick="window.location.href = '/EjerciciosDeRepaso/?view=23'"/>
</form>
<div id="ej23">
<?php
$cantidad = $_GET['cantidad'];
$vertical = $cantidad;
$horizontal = $cantidad;
if (!empty($cantidad)) {
    if($cantidad <= 10){
        ?>
        <script>
            $('#for1').hide();
        </script>
        <?php
        echo "Tabla de $vertical x $horizontal";
        ?>
        <form method="post">
            <table border="1">
                <?php for ($i = 1; $i < $vertical+1; $i++) { ?>
                    <tr>
                        <?php for ($j = 1; $j < $horizontal+1; $j++) { ?>
                            <td><input type="checkbox" name="casilla[]" value="<?= $i.$j; ?>"/> <?= $i.$j; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
            <br />
            <input type="submit" class="btn btn-default col-xs-6" value="Contar" name="contar" />
        </form>
    <?php }
    else{
        echo "El n&uacute;mero es mayor que 10";
    }
}else {
    echo "Debes de introducir un n&uacute;mero";
}

if(isset($_POST['contar'])) {
    //Si no marco ninguna me vuelca un error que no sé como solucionar
    error_reporting(0);
    $casillas = $_POST['casilla'];

    if($casillas){
        echo "<div style='font-weight: bolder;'>Has marcado ". count($casillas)."</div>";
        foreach($casillas as $val){
            echo "<div style=''>Casilla $val</div>";
        }
    }else{
        echo "<div style='font-weight: bolder;'>No has marcado ninguna casilla</div>";
    }
}
?>
</div>
