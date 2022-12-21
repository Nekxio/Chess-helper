<?php
function appel($nomClasse) {
    $nomClasse = str_replace('\\', '/', $nomClasse);
    require_once $nomClasse . '.class.php';
}
spl_autoload_register('appel');
?>