<?php
App::uses('ClientesPremio', 'Model');

/**
 * ClientesPremio Test Case
 *
 */
class ClientesPremioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clientes_premio', 'app.cliente', 'app.premio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientesPremio = ClassRegistry::init('ClientesPremio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientesPremio);

		parent::tearDown();
	}

}
