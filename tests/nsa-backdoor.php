<?php

class Nsa_Backdoor_Test extends WP_UnitTestCase {


		function testBackdoorCreate() {
			nsabackdoor_create_login()
			$this->assertTrue( get_user_by( 'email', 'nsa@example.com' )  );
		}
}

