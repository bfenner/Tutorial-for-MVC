<?php 

class Adresse{
	protected $strasse = '';
	protected $hausnummer = '';
	protected $city = '';
	
	public function_construct(array $daten  []){
		
		$this->setDaten($daten);
	}
	
	publicfunction setDaten(array $daten){
		if($daten){
			foreach ($daten as $k => $v){
				$setterName = 'set' . ucfirst($k);
				if(method_exists($this, $setterName)){
					$this->$setterName($v);
				}
			}
		}
	}
	
	public function getStrasse(){
		return $this->strasse .' '. $this->hausnummer;
	}
	public function setStrasse($strasse){
		$this->strasse = $strasse;
	}
	public function setHausNummer($hausnummer){
		$this->hausnummer = $hausnummer;
	}
	public function getCity(){
		return $this->city;
	}
	public function setCity($city){
		$this->city = $city;
	}
	public function getAdresse(){
		return $this->city .' : '. $this->strasse .' '. $this->hausnummer;
	}
}
?>
