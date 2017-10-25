<?php 
class Buch{
	protected $titel = '';
	protected $preis = 0;
	
	public function__construct(array $daten = []){
		$this->setDaten($daten);
	}
	public function setDaten(array $daten){
		 if($daten){
			 foreach($daten as $k => $v){
				 $setterName = 'set' . ucfirst($k);
				 if(method_exits($this, $setterName)){
					 $this->$setterName($v);
				 }
			 }
		 }
	}
	public function getTitel(){
		return $this->titel;
	}
	public function setTitel($titel){
		$this->titel = $titel;
	}
	public function getPreis(){
		return $this->preis;
	}
	public function setPreis($preis){
		$this->preis = $preis;
	}
	public function getBruttoPreis(){
		$bruttoPreis = $this->getPreis()*1.07;
		return $bruttoPreis;
	}
	public function setBruttoPreis($bruttoPreis){
		$this->setPreis($bruttoPreis / 1.07);
	}
}
?>