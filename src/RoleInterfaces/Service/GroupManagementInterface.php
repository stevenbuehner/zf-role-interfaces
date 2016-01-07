<?php

/**
 * 
 * (c) Steven B�hner <buehner@me.com>

 * @author steven
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RoleInterfaces\Service;

interface GroupManagementInterface {

	/**
	 *
	 * @return array
	 */
	public function getGroups();

	/**
	 *
	 * @param string $username        	
	 * @return array
	 */
	public function getGroupsByUser($username);

	/**
	 *
	 * @param string $groupname        	
	 * @return array
	 */
	public function getUsersByGroup($groupname);

	/**
	 *
	 * @param string $username        	
	 * @param string $groupname        	
	 */
	public function addUserToGroup($username, $groupname);

	/**
	 *
	 * @param string $username        	
	 * @param string $groupname        	
	 */
	public function deleteUserFromGroup($username, $groupname);

	/**
	 *
	 * @param string $groupname        	
	 * @return boolean
	 */
	public function groupExists($groupname);

}