<?php

namespace RoleInterfaces\Provider;

interface RoleProviderInterface {

	/**
	 *
	 * @param string $username        	
	 * @return array
	 */
	public function getRoles($username);

}
