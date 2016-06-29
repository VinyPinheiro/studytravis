<?php
class PessoaTest extends PHPUnit_Framework_TestCase
{
	public function testConstrutorNome()
	{
		$pessoa = new Pessoa("Vinicius", 21);

		$this->assertEquals("Vinicis", $pessoa->getNome());
	}
}

?>
