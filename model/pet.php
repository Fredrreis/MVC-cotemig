<?php
class Pet{
    
    private $id;
    private $nomeDono;
    private $nomeAnimal;
    private $tipoAnimal;
    private $peso ;

    private $con;

     public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);         
    }
    
    public function all(){
        // O MÉTOD PREPARE DA CLASS PDO ACEITA INSTRUÇÕES SQL
        $sql = $this->con->prepare("SELECT * FROM pet");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  mixed
	 */
	public function getNomeDono()
	{
		return $this->nomeDono;
	}

	/**
	 * Set the value of email
	 *
	 * @param   mixed  $email  
	 *
	 * @return  self
	 */
	public function setNomeDono($nomeDono)
	{
		$this->nomeDono = $nomeDono;

		return $this;
	}

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getNomeAnimal()
	{
		return $this->nomePet;
	}

	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setNomeAnimal($nomePet)
	{
		$this->nomePet = $nomePet;

		return $this;
	}

	/**
	 * Get the value of senha
	 *
	 * @return  mixed
	 */
	public function getTipoAnimal()
	{
		return $this->tipo;
	}

	/**
	 * Set the value of senha
	 *
	 * @param   mixed  $senha  
	 *
	 * @return  self
	 */
	public function setTipoAnimal($tipo)
	{
		$this->tipo = $tipo;

		return $this;
	}
    
	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getPeso()
	{
		return $this->peso;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setPeso($peso)
	{
		$this->peso = $peso;

		return $this;
	}
}
