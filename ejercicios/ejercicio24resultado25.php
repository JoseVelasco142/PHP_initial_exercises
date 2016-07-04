<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 09/10/2015
 * Time: 20:15
 */
$texto = $_GET['texto'];
$donde = $_GET['donde'];
$genero = $_GET['genero'];
?>
<style>
    html{
        background: black;
    }
    #resultado{
        margin: 10%;
        padding: 5%;
        background: white;
    }
</style>
<div id="resultado">
    <div style="font-size: 1.5em; font-weight: bolder; color:mediumblue">Formulario simple. Resultados del formulario</div>
    <div >
        <br />
        <div>Estos son los datos introducidos</div>
        <ul>
            <li> Texto de b&uacute;squeda : <?=$texto?></li>
            <li> Buscar en : <?=$donde?></li>
            <li> G&eacute;nero : <?=$genero?></li>
        </ul>
        <a href="/EjerciciosDeRepaso/?view=24">[ Nueva b&uacute;squeda ]</a>
    </div>
</div>
