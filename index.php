<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$chat = new Felin(3);

$michel = new Citoyen();
$michel->setAdresse(42, "rue de la République", "76210", "Bolbec");
$michel->allerALaPlage();

//Log::logWrite(serialize($chat));
