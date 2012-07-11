<?php
App::uses('Premio', 'Model');

/**
 * Premio Test Case
 *
 */
class PremioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.premio', 'app.parceiro', 'app.usuario', 'app.cliente', 'app.clientes_premio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Premio = ClassRegistry::init('Premio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Premio);

		parent::tearDown();
	}

}
