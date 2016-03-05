<?php
/**
 * @coversDefaultClass \Abed\PHPUnitdemo\Hello
 */
class PigLatinTest extends \PHPUnit_Framework_TestCase{

	protected $pigLatin;

	public function setUp(){
		$this->pigLatin = new Abed\PHPUnitDemo\PigLatin();
	}
	
	/**
	 * @test
	 */
	public function englishToPigLatinWordsCorrelty(){
		
		/**
		 * Given I have en english word
		 * If I pass this word to my PigLatin converter 
		 * I get back the correctly transformed version 
		 */
		$word = "test";
		$expectedResult = "esttay";

		$result = $this->pigLatin->convert($word);
		$this->assertEquals(
			$expectedResult,
			$result,
			"PigLatin conversion did not work correctly"
		);
	}	
}