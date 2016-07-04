<div class="col-xs-4 enunc">
    <p>9. Crea una p&aacute;gina para visualizar la fecha actual con los siguientes formatos:<br />
        Monday, 20 de Sep de 20015 08:22:51 PM<br />
        Sep 20, 2015, 8:22 pm 20/09/2015<br />
        20/09/2015</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-10" value="Mostrar fechas" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])) {
        $currentdate1 = date('l, j \d\e F \d\e Y h:i:s a');
        $currentdate2 = date("F j, Y, g:i a m/d/Y");
        $currentdate3 = date("m/d/y");
        echo $currentdate1;
        echo "<br />";
        echo $currentdate2;
        echo "<br />";
        echo $currentdate3;
    }

    ?>
</div>