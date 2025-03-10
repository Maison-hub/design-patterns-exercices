<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = App\Config::getInstance();
$config2 = App\Config::getInstance();

echo $config->get('apiKey') . PHP_EOL;
echo "<br>";
echo $config2->get('apiKey') . PHP_EOL;
