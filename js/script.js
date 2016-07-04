/**
 * Created by Jose on 05/10/2015.
 */

$(document).ready(function() {

    var indice = $('#indice');
    indice.append('<form action="../index.php">');
    for (i = 1; i <= 30; i++) {
        indice.append('<a href="?view='+i+'" class="btn col-md-6 col-xs-12 ancla">Ejer. ' + i + '</a>');
    }
    indice.append('</form>');

});





