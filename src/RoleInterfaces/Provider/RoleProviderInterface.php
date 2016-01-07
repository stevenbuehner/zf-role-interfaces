<?php

/**
 * 
 * (c) Steven BŸhner <buehner@me.com>

 * @author steven
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RoleInterfaces\Provider;

interface RoleProviderInterface {

	/**
	 *
	 * @param string $username        	
	 * @return array
	 */
	public function getRoles($username);

}
