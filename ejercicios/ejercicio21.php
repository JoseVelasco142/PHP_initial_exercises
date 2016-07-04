<div class="col-xs-4 enunc">
    <p>21. Cree un array llamado pila como este:</p><br />
    <p$pila =array(&quot;cinco&quot; = >5,&quot;uno&quot; = >l, &quot;cuatro&quot; = >4,&quot;dos&quot; = >2 , &quot;tres&quot; = >3) ;<br />
    <p> Muestre el array ordenado por asort, arsort, ksort, sort, rsort,</p>
    <p>Explica con comentarios cada tipo de ordenaci&oacute;n.</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <input type="submit" class="btn btn-default col-xs-6" value="Asort" name="asort" />
        <input type="submit" class="btn btn-default col-xs-6" value="Arsort" name="arsort" />
        <input type="submit" class="btn btn-default col-xs-12" value="Ksort" name="ksort" />
        <input type="submit" class="btn btn-default col-xs-6" value="Sort" name="sort" />
        <input type="submit" class="btn btn-default col-xs-6" value="Rsort" name="rsort" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    $pila = array("cinco"=>5, "uno" =>1, "cuatro"=>4, "dos"=>2 , "tres"=>3);

    if(isset($_POST['asort'])) {
        asort($pila);
        foreach ($pila as $key => $val) {
            echo "$key = $val <br />";
        }
    }

    if(isset($_POST['arsort'])) {
        arsort($pila);
        foreach ($pila as $key => $val) {
            echo "$key = $val <br />";
        }
    }

    if(isset($_POST['ksort'])) {
        ksort($pila);
        foreach ($pila as $key => $val) {
            echo "$key = $val <br />";
        }
    }

    if(isset($_POST['sort'])) {
        sort($pila);
        foreach ($pila as $key => $val) {
            echo "$key = $val <br />";
        }
    }

    if(isset($_POST['rsort'])) {
        rsort($pila);
        foreach ($pila as $key => $val) {
            echo "$key = $val <br />";
        }
    }
    ?>

</div>
