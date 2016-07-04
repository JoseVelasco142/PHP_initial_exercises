<div class="col-xs-4 enunc">
    <p>13. Realizar una p&aacute;gina en la que introduzca dos palabras en dos variables y diga si riman o no.</p>
    <p>Si coinciden las tres &uacute;ltimas letras tiene que decir que riman.  Si coinciden s&oacute;lo las dos &uacute;ltimas tiene que decir que riman un poco y si no, que no riman.</p>
    <p>Recuerde que las palabras rimar&aacute;n independiente de que se escriban con may&uacute;sculas o min&uacute;sculas.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-6">Palabra 1</label>
        <input type="text" class="input-lg col-xs-4" name="p1"/>
        <label class="label col-xs-6">Palabra 2</label>
        <input type="text" class="input-lg col-xs-4" name="p2"/>

        <input type="submit" class="btn btn-default col-xs-10" value="Buscar la rima" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $pal1 = strtolower ($_POST['p1']);
        $pal2 = strtolower ($_POST['p2']);
        $sub3pal1 = substr($pal1, -3);
        $sub3pal2 = substr($pal2, -3);
        $sub2pal1 = substr($pal1, -2);
        $sub2pal2 = substr($pal2, -2);
        $c = 0;
    if(!empty ($pal1) && !empty($pal2 )) {
        if (ctype_alpha($pal1) && ctype_alpha($pal2)) {
            if ($sub3pal1 == $sub3pal2) {
                echo "Esas palabras riman";
            } else {
                $c++;
                if ($sub2pal1 == $sub2pal2) {
                    echo "Esas palabras riman un poco";
                } else { $c++; }
            }
            if ($c == 2) {
                echo "Esas palabras no riman";
            }

        } else {
            echo "Debes de escribir palabras, no n&uacute;meros";
        }
    }else{ echo "Rellena los dos campos";}
    }
    ?>
</div>