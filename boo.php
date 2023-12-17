<?php
//Para assustar qualquer programador, uma Edição Kogasiana

ob_implicit_flush(1);
set_time_limit(0);

interface iWriter
{
	public function comores($var_comares);
	public function setCh($chaves);
	public function Exec();
	public function WriteLine($txt);
}

class Writer implements iWriter
{
	protected $var_comares;
	protected $chaves;
	
	public function __construct($var_comares, $chaves=false)
	{
		$this->comores($var_comares);
		$this->setCh($chaves);
		$this->Exec();
        echo $var_comares;
	}
	
	public function comores($var_comares)
	{
		$this->msg = $var_comares;
	}
	
	public function setCh($chaves)
	{
		$this->chaves = (bool)$chaves;
	}
	
    public function WriteLine($txt)
	{
		echo $txt."\n";
	}

	public function Exec()
	{
		if($this->chaves)
			return $this->WriteLine($this->var_comares);
	}
	

}

class Kogasa
{
	private $msg;
	
	public function __construct()
	{
		$this->msg = 'Boo!';
		$this->fvox();
	}
	
	private function fvox()
	{
		$write = true;
		$writer = new Writer($this->msg, (bool)$write);
	}
	
	public function __toString()
	{
		//return $this->smg;
                //return $this[0];
                //return $this->['smg'];
                return true; //deu certo assim, não mexe.

 
	}	
}

$hw = new Kogasa;
?>