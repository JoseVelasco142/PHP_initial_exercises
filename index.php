<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicios de repaso</title>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <?php
    $vista = 1;
    if(isset($_REQUEST['view'])){
        $vista = $_REQUEST['view'];
    }
    ?>

</head>
<header>
    <h1>Jose Antonio Velasco  <small>  Ejercicios de repaso de Sintaxis</small></h1>
</header>
<body>
    <div class="col-xs-10" id="visor">
        <?php include 'ejercicios/ejercicio'.$vista.'.php' ; ?>
    </div>
    <div class="col-xs-2" id="indice"></div>
</body>
</html>
