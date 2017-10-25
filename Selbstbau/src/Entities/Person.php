<?php 

class Person{
	protected $vorname = '';
	protected $nachname = '';
	protected $adresse = new Adresse;
	
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
	
	public function getVorname(){
		return $this->vorname;
	}
	public function setVorname($vorname){
		$this->vorname = $vorname;
	}
	public function getNachname(){
		return $this->nachname;
	}
	public function setNachname($nachname){
		$this->nachname = $nachname;
	}
	public function getAdresse(){
		return $this->adresse->getAdresse;
	}
	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}
}
?>