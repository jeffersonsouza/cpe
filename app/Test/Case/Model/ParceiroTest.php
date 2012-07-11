<?php
App::uses('Parceiro', 'Model');

/**
 * Parceiro Test Case
 *
 */
class ParceiroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.parceiro', 'app.usuario', 'app.premio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parceiro = ClassRegistry::init('Parceiro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parceiro);

		parent::tearDown();
	}

}
