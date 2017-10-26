<?php

	function bereinige($benutzerEingabe, $encoding = 'UTF-8'){
		return htmlspecialchars(
			strip_tags($benutzerEingabe),
			ENT_QUOTES | ENT_HTML5,
			$encoding
		);
	}

	function redirect($url){
		header('Location: ' . $url);
		exit;
	}
	function findePersonen(){
		$personen = [];
		$personen[] = new Person(
			[
				'vorname' => 'Bruno',
				'nachname' => 'Fenner',	
			]
		);
		$personen[] = new Person(
			[
				'vorname' => 'Max',
				'nachname' => 'Mustermann',
			]
		);
		return $personen;
	}
	
	function findePerson($id){
		$personen = findePersonen();
		
		$person = null;
		if(isset($personen[$id])){
			$person = $personen[$id];
		}
		return $person;
	}
?>