<?php

/**
 * 
 * (c) Steven Bühner <buehner@me.com>

 * @author Steven Bühner
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RoleInterfaces\Service;

interface UserManagementInterface {

	/**
	 *
	 * @return array
	 */
	public function getUserList();

	/**
	 *
	 * @param string $username        	
	 * @param string $password        	
	 */
	public function addUser($username, $password);

	/**
	 *
	 * @param string $username        	
	 * @param string $password        	
	 */
	public function updateUser($username, $password);

	/**
	 *
	 * @param string $username        	
	 */
	public function deleteUser($username);

	/**
	 *
	 * @param string $username        	
	 * @return boolean
	 */
	public function userExists($username);

}