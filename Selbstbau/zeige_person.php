<?php 
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Person.php';
require_once 'src/Entities/Adresse.php';


$person = findePerson(0);

require_once 'templates/zeige_person.tpl.php';
?>

