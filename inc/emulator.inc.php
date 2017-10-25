<?php 
function findeBuecher(){
	$buecher = [];
	$buecher[] = new Buch(
		[
			'titel' => 'Der Graf von Monte Christo',
			'preis' => 9.95,
		]
	);
	$buecher[] = new Buch(
		[
			'titel' => 'Percy Jackson und die Götter des Olymps',
			'preis' => 19.95,
		]
	);
	
	return $buecher;
}

function findeBuch($id){
	$buecher = findeBuecher();
	
	$buch = null;
	if (isset($buecher[$id])){
		$buch = $buecher[$id];
	}
	return $buch;
}
?>