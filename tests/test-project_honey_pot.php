<?php
class ProjectHoneyPotSpamTrapTest extends WP_UnitTestCase {
	function testInstantiation() {
		$this->assertInstanceOf('ProjectHoneyPotSpamTrap', new ProjectHoneyPotSpamTrap);
	}
}
