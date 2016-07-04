<div class="col-xs-4 enunc">
    <p>15. Realizar una p&aacute;gina PHP, que usando una funci&oacute;n , permita chequear si en una direcci&oacute;n de correo es v&aacute;lida. (usando expresiones regulares)</p>
    <br />
    <p> Si la direcci&oacute;n es v&aacute;lida escriba por un lado el nombre de usuario y por otro el dominio de dicha direcci&oacute;n. Usar la funci&oacute;n 'explode()'</p>
</div>

<div class="col-xs-8 ejercicio">
    <form method="post">
        <label class="label col-xs-4">Direcci&oacute;n</label>
        <input type="text" class="input-lg col-xs-8" name="mail"/>
        <input type="submit" class="btn btn-default col-xs-10" value="Comprobar email" name="calcular" />
    </form>
</div>

<div class="col-xs-8 resultado">
    <?php
    if(isset($_POST['calcular'])){
        $email = $_POST['mail'];

        if(!empty ($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $parte = explode('@' ,$email);
                echo "La direcci&oacute;n de correo ($email) es v&aacute;lida.";
                echo "<br />";
                echo "El usuario es ($parte[0])";
                echo "<br />";
                echo "El dominio es ($parte[1])";
            }else{
                echo "Esa direcci&oacute;n no es correcta";
            }
        }else{ echo "Debes de escribir algo";}
    }
    ?>
</div>